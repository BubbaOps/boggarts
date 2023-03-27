<?php

namespace BubbaOps\Boggarts;

/**
 * Simply strips any boggies found right out of the string.
 */
final class Boggarts
{
    public string $output;

    /**
     * The types of bogies to excise.
     *
     * @var string[]
     */
    protected array $types;

    protected string $input;

    public function __construct(
        public ?iterable $config = null
    ) {
        $this->config = $this->config ?? config('boggarts');
        mb_regex_encoding($this->config['encoding']);
        $this->types = array_keys($this->config['bogies']);
    }

    public static function make(?iterable $config = null): Boggarts
    {
        return new Boggarts($config);
    }

    public function text(string $text): Boggarts
    {
        $this->input = $text;
        $this->output = '';

        return $this;
    }

    public function finalize(): string
    {
        $this->output = mb_ereg_replace(
            pattern: $this->makePattern(),
            string: $this->input,
            replacement: null
        );

        return $this->output;
    }

    protected function makePattern(): string
    {
        $pattern = [];
        foreach ($this->getTypes() as $category) {
            foreach ($this->config['bogies'][$category] as $bogie) {
                $pattern[] = sprintf("\x{%04X}", $bogie['codepoint']);
            }
        }

        $pattern = '['.implode('|', $pattern).']';

        return $pattern;
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}
