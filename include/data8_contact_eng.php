<?php 
$contact = [
    'titre' => 'Questions ?',
    'message' => 'If you have any questions about the equipment, various facts, on climbing, etc.You can contact us via this form:',
    'form' => [
        'contenu' => [
            [
                'for' => 'nom_prenom',
                'btw_label' => 'Your name & first name',
                'title' => 'nom & prénom',
                'type' => 'text',
                'id' => 'nom_prenom', 
                'name' => 'nom',
                'placeholder' => 'Schmit Paul',
            ],
            [
                'for' => 'email',
                'btw_label' => 'Your email',
                'title' => 'Votre email',
                'type' => 'email',
                'id' => 'email', 
                'name' => 'email',
                'placeholder' => 'myemail@mail.com'
            ],
        ],
        'select3' => [
            'title3' => 'Subject of demand',
            'id' => 'sujet_demande', 
            'name' => 'sujet_demande',
            'pre_option' => 'Choose the subject of your message',
            'options' => [
                'option1' => [
                    'value' => 'matériels',
                    'name' => 'Materials',
                ],
                'option2' => [
                    'value' => 'endroits_pratique',
                    'name' => 'Place to practice',
                ],
                'option3' => [
                    'value' => 'autre',
                    'name' => 'Others...',
                ],
            ],
        ],
        'label3' => [
            'for' => 'sujet_demande',
            'btw_label' => 'What is the subject of your request?'
        ],
        'label4' => [
            'for' => 'message',
            'btw_label' => 'Your message'
        ],
        'textarea' => [
            'id' => 'message',
            'name' => 'message',
            'placeholder' => 'Enter your message ...'
        ],
        'button' => 'Send my message',
    ],
]

?>