<?php

// Array com as informações das especialidades
$especialidades = [
    [
        'icon' => 'hugeicons_man.png',
        'alt' => 'Urologia masculina',
        'label' => 'Urologia masculina'
    ],
    [
        'icon' => 'streamline-ultimate_pregnancy-sperm-1.png',
        'alt' => 'Infertilidade',
        'label' => 'Infertilidade'
    ],
    [
        'icon' => 'hugeicons_woman.png',
        'alt' => 'Urologia feminina',
        'label' => 'Urologia feminina'
    ],
    [
        'icon' => 'streamline-ultimate_factory-industrial-robot-arm-1.png',
        'alt' => 'Cirurgia robótica',
        'label' => 'Cirurgia robótica'
    ],
    [
        'icon' => 'ph_drop-thin.png',
        'alt' => 'Disfunções urinárias',
        'label' => 'Disfunções urinárias'
    ],
    [
        'icon' => 'healthicons_prostate-cancer-outline.png',
        'alt' => 'Oncologia urológica',
        'label' => 'Oncologia urológica'
    ],
    [
        'icon' => 'hugeicons_gem.png',
        'alt' => 'Litíase',
        'label' => 'Litíase'
    ],
    [
        'icon' => 'healthicons_baby-0203m-outline.png',
        'alt' => 'Urologia pediátrica',
        'label' => 'Urologia pediátrica'
    ]
];



// NOVOS ARRAYS PARA LOCAIS DE ATENDIMENTO

$locais_aracaju = [
    [
        'id' => 'uniccat',
        'img_convenio' => 'aracaju/unicat.jpg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'unicat.png',
        'tem_convenio' => true, // <-- ADICIONE AQUI
        'alt' => 'Clínica Uniccat',
        'titulo' => 'Uniccat',
        'endereco' => 'Av. Gonçalo Rolemberg Leite, 1813 - Luzia, Aracaju - SE, 49040-280',
        'telefone' => '(79) 3211-9007'
    ],
    [
        'id' => 'horizonte',
        'img_convenio' => 'aracaju/horizonte.jpg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'jardins.png',
        'tem_convenio' => false, // <-- ADICIONE AQUI
        'alt' => 'Clínica Horizonte Jardins',
        'titulo' => 'Horizonte Jardins',
        'endereco' => 'Av. Dr. José Machado de Souza, 49 - Jardins, Aracaju - SE, 49025-740',
        'telefone' => '(79) 3251-1140'
    ],
    [
        'id' => 'hospim',
        'img_convenio' => 'aracaju/hosprim.jpg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'hosprim.png',
        'tem_convenio' => true, // <-- ADICIONE AQUI
        'alt' => 'Hospital do Rim',
        'titulo' => 'Hospital do Rim',
        'endereco' => 'R. Arauá, 92 - Centro, Aracaju - SE, 49010-330',
        'telefone' => '(79) 3211-9007'
    ]
];

$locais_salvador = [
    [
        'id' => 'auros',
        'img_convenio' => 'salvador/auros.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'auros.png',
        'alt' => 'Clínica Auros',
        'titulo' => 'Clínica Auros',
        'endereco' => 'Av. Princesa Isabel, 514 - sala 404 - Barra, Salvador - BA, 40130-155',
        'telefone' => '(71) 3101-2605'
    ],
    [
        'id' => 'cub',
        'img_convenio' => 'salvador/cub.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'cub.png',
        'alt' => 'Clínica CUB',
        'titulo' => 'Clínica CUB',
        'endereco' => 'Rua - Ladeira do Hospital, 248 - Nazaré, Salvador - BA, 40050-420',
        'telefone' => '(71) 3243-2053'
    ],
    [
        'id' => 'saudemais',
        'img_convenio' => 'salvador/saudemais.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'saudemais.png',
        'alt' => 'Clínica Saúde Mais',
        'titulo' => 'Clínica Saúde Mais',
        'endereco' => 'R. Prof. Agroriniano de Barros, 228 - Caixa d\'Água, Salvador - BA, 40323-010',
        'telefone' => '(71) 3241-3241'
    ]
];


// ... (seus arrays $especialidades, $locais_aracaju, $locais_salvador já existem aqui) ...


// NOVO ARRAY PARA DEPOIMENTOS
$depoimentos = [
    [
        'nome' => 'C. A.',
        'idade' => '42 anos',
        'local' => 'Aracaju - SE',
        'depoimento' => 'Desde a primeira consulta, me senti acolhido e respeitado. O atendimento foi claro, humano e atencioso, transmitindo confiança em cada detalhe. Hoje sigo o tratamento com tranquilidade e gratidão por ter encontrado um profissional que realmente se importa com a minha saúde.'
    ],
    [
        'nome' => 'Carlos Albuquerque',
        'idade' => '42 anos',
        'local' => 'Aracaju - SE',
        'depoimento' => 'Desde a primeira consulta, me senti acolhido e respeitado. O atendimento foi claro, humano e atencioso, transmitindo confiança em cada detalhe. Hoje sigo o tratamento com tranquilidade e gratidão por ter encontrado um profissional que realmente se importa com a minha saúde.'
    ],
    [
        'nome' => 'M. S.',
        'idade' => '35 anos',
        'local' => 'Salvador - BA',
        'depoimento' => 'Profissional exemplar! A Dra. Emily foi muito atenciosa e paciente para explicar todo o procedimento, o que me deixou muito mais calma. Recomendo de olhos fechados.'
    ]
];



