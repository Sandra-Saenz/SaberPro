<?php

namespace App\Imports;

use App\Models\Pregunta;
use App\Models\Asignatura;
use Maatwebsite\Excel\Concerns\{OnEachRow, WithHeadingRow};
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\Validator;

class PreguntaImport implements OnEachRow, WithHeadingRow
{
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();
        
        dd($row);

        Validator::make($row->toArray(), [
             '*.0' => 'required',
         ])->validate();

        $enunciado = Pregunta::where('enunciado', '=', $row['enunciado'])->first();
        if (is_null($enunciado)) {
            $asignatura_id = Asignatura::select('id')->where('nombre', '=', $row['asignatura'])->first();
            $pregunta = Pregunta::create([
                'enunciado'            => $row['enunciado'] ?? $row['pregunta'],
                'respuesta_correcta'   => $row['respuesta_correcta'],
                'propietario_pregunta' => $row['propietario_pregunta'] ?? $row['propietario'],
                'asignatura_id'        => $asignatura_id->id,
            ]);

            $pregunta->preguntaRespuesta()->create([
              'respuesta_A'   => $row['respuesta_A'] ?? $row['respuesta_a'] ?? $row['A'] ?? $row['a'],
              'respuesta_B'   => $row['respuesta_B'] ?? $row['respuesta_b'] ?? $row['B'] ?? $row['b'],
              'respuesta_C'   => $row['respuesta_C'] ?? $row['respuesta_c'] ?? $row['C'] ?? $row['c'],
              'respuesta_D'   => $row['respuesta_D'] ?? $row['respuesta_d'] ?? $row['D'] ?? $row['d'],
            ]);
        }
    }

}
