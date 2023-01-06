<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <?php if($transparansi) $this->load->view($folder_themes .'/partials/apbdesa', $transparansi) ?>
</div>

<?php
$social_media = [
    'facebook' => [
        'color' => 'bg-blue-600',
        'icon' => 'fa-facebook-f'
    ],
    'twitter' => [
        'color' => 'bg-blue-400',
        'icon' => 'fa-twitter'
    ],
    'instagram' => [
        'color' => 'bg-pink-500',
        'icon' => 'fa-instagram'
    ],
    'telegram' => [
        'color' => 'bg-blue-500',
        'icon' => 'fa-telegram'
    ],
    'whatsapp' => [
        'color' => 'bg-green-500',
        'icon' => 'fa-whatsapp'
    ],
    'youtube' => [
        'color' => 'bg-red-500',
        'icon' => 'fa-youtube'
    ]
];
?>

<?php foreach($sosmed as $social) : ?>
    <?php if($social['link']) : ?>
        <?php
        $social_media[strtolower($social['nama'])]['link'] = $social['link'];
        ?>
    <?php endif ?>
<?php endforeach ?>

<?php $this->load->view($folder_themes .'/commons/back_to_top') ?>

<footer class="mx-auto pt-5 footer bg-zinc-700 text-white py-5 px-5">
    <div class="rounded-t-xl flex flex-col gap-3 lg:flex-row justify-between items-center text-center lg:text-left">
    <span class="space-y-2">
      <p>Supported by <a href="https://csoneindonesia.com">Cs One Indonesia</a></p>
        <!--      <p><a href="https://www.trivusi.web.id" class="underline decoration-pink-500 underline-offset-1 decoration-2" target="_blank" rel="noopener">Tema Esensi --><?//= THEME_VERSION ?><!--</a> - <a href="https://opensid.my.id" class="underline decoration-green-500 underline-offset-1 decoration-2" target="_blank" rel="noopener">OpenSID --><?//= ambilVersi() ?><!--</a></p>-->
    </span>
        <ul class="space-x-1">
<!--            --><?php //foreach($social_media as $sm) : ?>
<!--                --><?php //if($link = $sm['link']) : ?>
<!--                    <li class="inline-block"><a href="--><?php //= $link ?><!--" class="inline-flex items-center justify-center --><?php //= $sm['color'] ?><!-- h-8 w-8 rounded-full"><i class="fab fa-lg --><?php //= $sm['icon'] ?><!--"></i></a></li>-->
<!--                --><?php //endif ?>
<!--            --><?php //endforeach ?>
        </ul>
    </div>
    <div class="mt-5">
        <?php foreach($menu_kiri as $menu) : ?>
            <li class="lg:block">
                <a href="<?= site_url("artikel/kategori/{$menu['slug']}") ?>" class="block lg:inline-block py-2 hover:text-link">
                    <?= $menu['kategori'] ?>
                </a>
            </li>
            <?php if(count($menu['submenu']) > 0) : ?>
                <?php foreach($menu['submenu'] as $submenu) : ?>
                    <li class="lg:inline-block">
                        <a href="<?= site_url("artikel/kategori/{$submenu['slug']}") ?>" class="block lg:inline-block py-2 hover:text-link">
                            <?= $submenu['kategori'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</footer>