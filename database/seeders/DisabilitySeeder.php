<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disability;

class DisabilitySeeder extends Seeder
{
    public function run(): void
    {
        Disability::insert([
            ['id' => 1,  'pt' => 'Deficiência auditiva', 'en' => 'Hearing impairment', 'es' => 'Discapacidad auditiva', 'status' => 'AT'],
            ['id' => 2,  'pt' => 'Deficiência intelectual', 'en' => 'Intellectual disability', 'es' => 'Discapacidad intelectual', 'status' => 'AT'],
            ['id' => 3,  'pt' => 'Deficiência visual', 'en' => 'Visual impairment', 'es' => 'Discapacidad visual', 'status' => 'AT'],
            ['id' => 4,  'pt' => 'Deficiência física', 'en' => 'Physical Impairment', 'es' => 'Discapacidad física', 'status' => 'AT'],
            ['id' => 5,  'pt' => 'Transtorno Global do Desenvolvimento', 'en' => 'Global Development Disorder', 'es' => 'Trastorno global del desarrollo', 'status' => 'AT'],
            ['id' => 6,  'pt' => 'Transtorno do Espectro Autista', 'en' => 'Autistic Spectrum Disorder', 'es' => 'Trastorno del espectro autista', 'status' => 'AT'],
            ['id' => 7,  'pt' => 'Altas Habilidades', 'en' => 'High Ability', 'es' => 'Altas capacidades', 'status' => 'AT'],
            ['id' => 8,  'pt' => 'Superdotação', 'en' => 'Gifted', 'es' => 'Superdotado', 'status' => 'AT'],
            ['id' => 99, 'pt' => 'Prefiro não declarar', 'en' => 'I prefer not to declare', 'es' => 'Prefiero no declarar', 'status' => 'AT'],
        ]);
    }
}
