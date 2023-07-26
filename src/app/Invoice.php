<?php

namespace App;

class Invoice
{
    /*
    * magid method __get dan __set tidak disarankan digunakan
    * karena kurang bagus untuk di implementasi
    * karena break encapsulation
    */
    // protected array $data = [];

    // public function __construct(float $amount)
    // {
    //     $this->amount = $amount;
    // }
    // public function __get(string $name)
    // {
    //     if (property_exists($this, $name)) {
    //         return $this->$name;
    //     }

    //     return null;
    // }

    // public function __set(string $name, $value): void
    // {
    //     if (property_exists($this, $name)) {
    //         $this->$name = $value;
    //     }
    // }

    // public function __isset(string $name): bool
    // {
    //     return array_key_exists($name, $this->data);
    // }
    // public function __unset(string $name): void
    // {
    //     unset($this->data[$name]);
    // }

    // protected function process(float $amount, string $description)
    // {
    //     var_dump('process');
    // }

    // public function __call(string $name, array $arguments)
    // {
    //     if (method_exists($this, $name)) {
    //         call_user_func_array([$this, $name], $arguments);
    //     }
    // }

    // public static function __callStatic(string $name, array $arguments)
    // {
    //     var_dump('static', $name, $arguments);
    // }

    // public function __toString(): string
    // {
    //     return 'Hello';
    // }

    // public function __invoke(): void
    // {
    //     var_dump('Hello');
    // }

    private float $amount = 12;
    private int $id = 1;
    private string $accountNumber = '56832512';
    public function __debugInfo()
    {
        return [
            'amount' => $this->amount,
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4)
        ];
    }
}
