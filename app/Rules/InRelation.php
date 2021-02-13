<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class InRelation implements Rule
{
    /**
     * Tabla en la bases de datos
     *
     * @var string
     */
    private $table = null;

    /**
     * Campo a comprar
     *
     * @var string
     */
    private $field = null;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(string $table, string $field)
    {
        $this->table = $table;
        $this->field = $field;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        # Obtener el valor del campo en la peticion
        $field_value = request()->get($this->field);

        # Verificar si existe en la tabla
        $data = DB::table($this->table)
                        ->select('id')
                        ->where([
                            ['id', '=', $value],
                            [$this->field, '=', $field_value]
                        ])->count();


        return (bool) $data == 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Este dato es inválido.';
    }
}
