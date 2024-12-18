<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Stanica extends Model
{
    // Use the HasFactory trait for factory-based model creation
    use HasFactory;

    // Define the table name in the database
    protected $table = 'stanice';

    // Define the mass-assignable attributes
    protected $fillable = ['naziv'];

    /**
     * Validates the provided data for creating or updating a railway line.
     *
     * This method ensures that the input data complies with the following rules:
     * - `naziv`: Required, must be a string, and cannot exceed 255 characters.
     *
     * @param  array  $data  The data to be validated.
     * @return \Illuminate\Contracts\Validation\Validator.
     */
    public static function validate($data)
    {
        $validator = Validator::make($data, [
            'naziv'  => 'required|string|max:255',
        ]);

        return $validator;
    }
}
