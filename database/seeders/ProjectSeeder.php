<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Objective;
use App\Models\Pronoun;
use App\Models\Role;
use App\Models\TeamMember;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Objetivos
        Objective::insert([
            ['id' => 1, 'pt' => 'O Projeto PARADESPORTO BRASIL + ACESSÍVEL pretende sistematizar, organizar e difundir o conhecimento sobre o paradesporto, por meio da produção de conteúdo específico, a partir das análises das políticas públicas e pedagógicas do esporte para/das pessoas com deficiência.', 'en' => 'The Brazil parasport + accessible Project intends to systematize, organize and disseminate knowledge about Para sports, through the production of specific content, based on analyzing public policies and pedagogical sports for/of people with disabilities.', 'es' => 'El Para deporte Brasil + Accesible pretende sistematizar, organizar y difundir el conocimiento sobre Para deportes, a través de la producción de contenidos específicos, a partir del análisis de políticas públicas y pedagógicas deportivas para/de personas con discapacidad.', 'status' => 'AT'],
            ['id' => 2, 'pt' => 'O projeto é desenvolvido de maneira multidisciplinar e capitaneada pelo curso de Educação Física da UNIFESP. Contamos com o apoio científico da Federação Sul-americana de Atividade Física Adaptada - FESAFA. A Secretaria Nacional do Paradesporto do Ministério do Esporte é apoiadora do projeto.', 'en' => 'The project is developed in a multidisciplinary way and led by the Physical Education course at UNIFESP. We have the scientific support of the South American Federation of Adapted Physical Activity - FESAFA. The Brazilian National Secretary of Para sports at the Ministry of Sport is the supporter of the project.', 'es' => 'El proyecto es desarrollado de forma multidisciplinaria y liderado por la carrera de Educación Física de la UNIFESP. Contamos con el respaldo científico de la Federación Sudamericana de Actividad Física Adaptada - FESAFA. La Secretaría Nacional de Para-deportes del Ministerio del Deporte es partidaria del proyecto.', 'status' => 'AT'],
        ]);

        // 2. Pronomes
        Pronoun::insert([
            ['id' => 1, 'pt' => '', 'en' => '', 'es' => '', 'status' => 'AT'],
            ['id' => 2, 'pt' => 'Prof. Dr.', 'en' => 'Prof. Dr.', 'es' => 'Profe. doctor', 'status' => 'AT'],
            ['id' => 3, 'pt' => 'Profa. Ms.', 'en' => 'Profe. Ms.', 'es' => 'Prof. Ms.', 'status' => 'AT'],
            ['id' => 4, 'pt' => 'Profa. Dra.', 'en' => 'Prof. Dr.', 'es' => 'Profe. Dr.', 'status' => 'AT'],
        ]);

        // 3. Cargos
        Role::insert([
            ['id' => 1, 'pt' => 'Coordenação', 'en' => 'Coordination', 'es' => 'Coordinación', 'leader_title' => null, 'order' => 1, 'status' => 'AT'],
            ['id' => 2, 'pt' => 'Produção de Conteúdo', 'en' => 'Content production', 'es' => 'Producción de contenido', 'leader_title' => null, 'order' => 10, 'status' => 'IN'],
            ['id' => 3, 'pt' => 'Repositório Temático no Paradesporto', 'en' => 'Thematic Repository at Para sport', 'es' => 'Repositorio temático en Para deporte', 'leader_title' => 'Curadora', 'order' => 3, 'status' => 'AT'],
            ['id' => 4, 'pt' => 'Análise de dados de Políticas Públicas no Paradesporto', 'en' => 'Data Analysis of Public Policies in Para sports', 'es' => 'Análisis de Datos de Políticas Públicas en Para deporte', 'leader_title' => 'Responsável', 'order' => 4, 'status' => 'AT'],
            ['id' => 5, 'pt' => 'Intérpretes de Libras', 'en' => 'Sign Language Interpreters', 'es' => 'Intérpretes de lenguaje de señas', 'leader_title' => null, 'order' => 10, 'status' => 'IN'],
            ['id' => 6, 'pt' => 'Equipe de Diagramação', 'en' => 'Design Team', 'es' => 'Equipo de diseño', 'leader_title' => null, 'order' => 10, 'status' => 'IN'],
            ['id' => 7, 'pt' => 'Apoio Técnico', 'en' => 'Technical support', 'es' => 'Apoyo técnico', 'leader_title' => null, 'order' => 6, 'status' => 'AT'],
            ['id' => 8, 'pt' => 'Suporte de TI', 'en' => 'IT support', 'es' => 'Soporte de TI', 'leader_title' => null, 'order' => 7, 'status' => 'AT'],
            ['id' => 9, 'pt' => 'Projeto de Pesquisa em Pedagogia do Paradesporto', 'en' => 'Research Project on Parasports Pedagogy', 'es' => 'Proyecto de Investigación sobre Pedagogía del Paradeporte', 'leader_title' => 'Coordenadora', 'order' => 2, 'status' => 'AT'],
            ['id' => 10, 'pt' => 'Redes Sociais', 'en' => 'Social Media', 'es' => 'Redes Sociales', 'leader_title' => null, 'order' => 5, 'status' => 'AT'],
        ]);

        // 4. Membros da Equipe
        TeamMember::insert([
            ['id' => 1, 'pronoun_id' => 2, 'role_id' => 1, 'name' => 'Ciro Winckler', 'order' => 1, 'status' => 'AT'],
            ['id' => 7, 'pronoun_id' => 4, 'role_id' => 3, 'name' => 'Ruth Eugênia Amarante Cidade', 'order' => 1, 'status' => 'AT'],
            ['id' => 11, 'pronoun_id' => 4, 'role_id' => 9, 'name' => 'Elke Lima Trigo', 'order' => 2, 'status' => 'AT'],
            ['id' => 12, 'pronoun_id' => 4, 'role_id' => 3, 'name' => 'Renata Matheus Willig', 'order' => 2, 'status' => 'AT'],
            ['id' => 21, 'pronoun_id' => 1, 'role_id' => 7, 'name' => 'Elisangela Marina dos Santos', 'order' => 1, 'status' => 'AT'],
            ['id' => 22, 'pronoun_id' => 1, 'role_id' => 8, 'name' => 'Silvio Flores', 'order' => 1, 'status' => 'AT'],
            ['id' => 23, 'pronoun_id' => 4, 'role_id' => 9, 'name' => 'Mariana Simões Pimentel Gomes', 'order' => 1, 'status' => 'AT'],
            ['id' => 24, 'pronoun_id' => 1, 'role_id' => 9, 'name' => 'Gustavo Moreira de Faria Rosa', 'order' => 3, 'status' => 'AT'],
            ['id' => 25, 'pronoun_id' => 1, 'role_id' => 9, 'name' => 'Ana Carolina Martins Campanaro', 'order' => 4, 'status' => 'AT'],
            ['id' => 26, 'pronoun_id' => 1, 'role_id' => 9, 'name' => 'Gustavo dos Santos Rosa', 'order' => 5, 'status' => 'AT'],
            ['id' => 27, 'pronoun_id' => 2, 'role_id' => 4, 'name' => 'Gustavo T. F. Santos', 'order' => 1, 'status' => 'AT'],
            ['id' => 28, 'pronoun_id' => 2, 'role_id' => 4, 'name' => 'Breno Augusto Bormann de Souza Filho', 'order' => 2, 'status' => 'AT'],
            ['id' => 29, 'pronoun_id' => 1, 'role_id' => 4, 'name' => 'Leonardo Oliveira de Souza', 'order' => 3, 'status' => 'AT'],
            ['id' => 30, 'pronoun_id' => 1, 'role_id' => 10, 'name' => 'Bianca Gesualdi Ferreira de Souza', 'order' => 1, 'status' => 'AT'],
        ]);
    }
}