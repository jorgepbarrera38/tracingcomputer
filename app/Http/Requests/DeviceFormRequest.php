<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeviceFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'element_id' => 'required',
            'funcionary_id' => 'required',
            'ubication_id' => 'required',
            'dependence_id' => 'required',
            'brand_id' => 'required',
            'serial' => 'required|string|unique:devices',
            'code' => 'required|string|unique:devices',
            'status' => 'required',
            'description' => 'required|string',
            'observations' => 'max:100',
            'acquisition'=> 'required',
            'cost'=> 'required|numeric',
            'datebuy'=> 'required|date',
            'initoperation'=> 'required|date',
            'usefullife' => 'required|numeric',
        ];
    }
    public function attributes(){
        return [
            'element_id' => 'Elemento',
            'funcionary_id' => 'Funcionario',
            'ubication_id' => 'Ubicación',
            'dependence_id' => 'Dependencia',
            'brand_id' => 'Marca',
            'serial' => 'Serial',
            'code' => 'Placa',
            'status' => 'Estado',
            'description' => 'Descripción',
            'observations' => 'Observaciónes',
            'acquisition'=> 'Forma de adquisición',
            'cost'=> 'Costo de adquisición',
            'datebuy'=> 'Fecha de compra',
            'initoperation'=> 'Inicio de operación',
            'usefullife' => 'Vida útil',
        ];
    }
}

