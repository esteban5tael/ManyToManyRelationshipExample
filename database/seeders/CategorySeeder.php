<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para las categorías de aprendizaje de Laravel
        $categories = [
            ['name' => 'Introducción a Laravel', 'description' => 'Conceptos básicos y primeros pasos en Laravel'],
            ['name' => 'Rutas y Controladores', 'description' => 'Gestión de rutas y controladores en Laravel'],
            ['name' => 'Eloquent ORM', 'description' => 'Trabajar con la capa de abstracción de base de datos en Laravel'],
            ['name' => 'Vistas y Plantillas', 'description' => 'Creación y manipulación de vistas y plantillas en Laravel'],
            ['name' => 'Autenticación y Autorización', 'description' => 'Gestión de la autenticación y autorización de usuarios en Laravel'],
            ['name' => 'Envío de Correo Electrónico', 'description' => 'Configuración y envío de correos electrónicos en Laravel'],
            ['name' => 'Testing en Laravel', 'description' => 'Pruebas unitarias y de integración en Laravel'],
            ['name' => 'Despliegue y Mantenimiento', 'description' => 'Despliegue y mantenimiento de aplicaciones Laravel en producción'],
            ['name' => 'APIs en Laravel', 'description' => 'Creación y consumo de APIs RESTful en Laravel'],
            ['name' => 'Paquetes y Extensiones', 'description' => 'Uso de paquetes y extensiones para ampliar funcionalidades en Laravel']
        ];

        // Crear registros de prueba usando el modelo Category
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
