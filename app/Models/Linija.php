<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Linija extends Model
{
    // Use the HasFactory trait for factory-based model creation
    use HasFactory;

    // Define the table name in the database
    protected $table = 'linije';

    // Define the mass-assignable attributes
    protected $fillable = ['naziv_linije', 'od_stanica_id', 'do_stanica_id', 'vreme_polaska', 'vreme_dolaska'];

    /**
     * Validates the provided data for creating or updating a railway line.
     *
     * This method ensures that the input data complies with the following rules:
     * - `naziv_linije`: Required, must be a string, and cannot exceed 255 characters.
     * - `od_stanica_id`: Required, must exist in the `stanice` table (`id` column).
     * - `do_stanica_id`: Required, must exist in the `stanice` table (`id` column).
     * - `vreme_polaska`: Required, must follow the `H:i` time format.
     * - `vreme_dolaska`: Required, must follow the `H:i` time format, and must be after `vreme_polaska`.
     *
     * @param  array  $data  The data to be validated.
     * @return \Illuminate\Contracts\Validation\Validator.
     */
    public static function validate($data)
    {
        $validator = Validator::make($data, [
            'naziv_linije'  => 'required|string|max:255',
            'od_stanica_id' => 'required|exists:stanice,id',
            'do_stanica_id' => 'required|exists:stanice,id',
            'vreme_polaska' => 'required|date_format:H:i',
            'vreme_dolaska' => 'required|date_format:H:i|after:vreme_polaska',
        ]);

        return $validator;
    }
}
