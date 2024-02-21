<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class productospdf extends Model
    {
        use HasFactory;

        protected $table = 'productospdf';

        protected $fillable = [
            'nombre_archivo_pdf',
            'nombre_imagen',
            'nombre_producto_pdf',
        ];
    }
