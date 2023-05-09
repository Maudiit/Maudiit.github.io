<?php 
$contact = [
    'titre' => 'Des questions ?',
    'message' => 'Si vous avez des questions concernant le matériel, des faits divers, sur l\'escalade, etc. Vous pouvez nous contacter via ce formulaire:',
    'form' => [
        'contenu' => [
            [
                'for' => 'nom_prenom',
                'btw_label' => 'Votre nom & prénom',
                'title' => 'nom & prénom',
                'type' => 'text',
                'id' => 'nom_prenom', 
                'name' => 'nom',
                'placeholder' => 'Schmit Paul',
            ],
            [
                'for' => 'email',
                'btw_label' => 'Votre e-mail',
                'title' => 'Votre email',
                'type' => 'email',
                'id' => 'email', 
                'name' => 'email',
                'placeholder' => 'monadresse@mail.com'
            ],
        ],
        'select3' => [
            'title3' => 'Sujet de la demande',
            'id' => 'sujet_demande', 
            'name' => 'sujet_demande',
            'pre_option' => 'Choisissez le sujet de votre message',
            'options' => [
                'option1' => [
                    'value' => 'matériels',
                    'name' => 'Matériels',
                ],
                'option2' => [
                    'value' => 'endroits_pratique',
                    'name' => 'Endroit où pratiquer',
                ],
                'option3' => [
                    'value' => 'autre',
                    'name' => 'Autres...',
                ],
            ],
        ],
        'label3' => [
            'for' => 'sujet_demande',
            'btw_label' => 'Quel est le sujet de votre demande ?'
        ],
        'label4' => [
            'for' => 'message',
            'btw_label' => 'Votre message'
        ],
        'textarea' => [
            'id' => 'message',
            'name' => 'message',
            'placeholder' => 'Saisissez votre message...'
        ],
        'button' => 'Envoyer mon message',
    ],
]

?>