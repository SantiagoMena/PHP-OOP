<?php
namespace Source;
class HtmlNode
{
    protected string $tag;
    protected ?string $content;
    protected array $attributes = [];

    public function __construct(string $tag, ?string $content = null, array $attributes = []) {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function get(string $name, $default)
    {
        return $this->attributes[$name] ?? $default;
    }

    public function __invoke(string $name, $default = null)
    {
        return $this->get($name, $default);
    }

    public function __toString()
    {
        return $this->render();
    }

    public function __call(string $method, array $args = [])
    {
        if(!isset($args[0])) {
            throw new \Exception("You forgot to pass the value to the attribute $method");
        }

        $this->attributes[$method] = $args[0];
        return $this;
    }

    public static function __callStatic(string $method, ?array $args = [])
    {
        $content = isset($args[0]) ? $args[0] : null;

        $attributes = isset($args[1]) ? $args[1] : [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function render()
    {
        $result = "<{$this->tag}{$this->renderAttributes()}>";

        if($this->content != null) {
            $result .= "$this->content</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes()
    {
        $result = "";

        foreach ($this->attributes as $name => $value) {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }
}
