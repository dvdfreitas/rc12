<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php

    $stories = [
        [
            'id' => 1,
            'title' => 'Já acabaram as férias :(',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum accusamus minus sint facere alias, ex non error itaque. Natus sequi officia dignissimos aut non numquam iure nihil omnis quia rerum.',        
            'image' => '6.png',
            'type' => 'youtube',
            'url' => 'https://www.google.pt'
        ],
        [
            'id' => 1,
            'title' => 'Estou cheio de fome',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati amet pariatur praesentium error repellendus magni aliquid itaque, nihil modi ut eum distinctio iusto voluptate inventore voluptas ipsa nisi. Sequi, vitae.',
            'image' => '9.jpg',
            'type' => 'facebook',
            'url' => 'https://www.youtube.pt'
        ],
        [
            'id' => 1,
            'title' => 'Estou cheio de fome',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati amet pariatur praesentium error repellendus magni aliquid itaque, nihil modi ut eum distinctio iusto voluptate inventore voluptas ipsa nisi. Sequi, vitae.',
            'image' => '1.png',
            'type' => 'facebook',
            'url' => 'https://www.youtube.pt'
        ],
        [
            'id' => 1,
            'title' => 'Estou cheio de fome',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati amet pariatur praesentium error repellendus magni aliquid itaque, nihil modi ut eum distinctio iusto voluptate inventore voluptas ipsa nisi. Sequi, vitae.',
            'image' => '1.png',
            'type' => 'facebook',
            'url' => 'https://www.youtube.pt'
        ]
    ];
?>

<body>
    <div class="max-w-4xl m-auto">
        <div class="grid grid-cols-3">
            <?php foreach ($stories as $story) { ?>
                <div class="w-72 border border-2 m-4 rounded-xl hover:shadow-xl">
                <div class="relative p-2">
                    <img class="w-full h-48 object-cover" src="public/img/<?= $story['image'] ?>">
                    <img class="absolute bottom-4 right-4 h-12" src="public/img/<?= $story['type']?>.svg">
                </div>
                <div class="px-3 py-2">
                    <p class="text-2xl leading-5 mb-2"><?= $story['title'] ?></p>
                    <p class="text-justify leading-5"><?= $story['description'] ?></p>
                    <a href="<?= $story['url'] ?>"><p class="font-bold">Ver mais</p></a>
                </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>



