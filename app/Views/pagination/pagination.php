<?php if ($pager->hasPrevious() || $pager->hasNext()): ?>
<div class="flex gap-2">

    <?php if ($pager->hasPrevious()): ?>
        <a href="<?= $pager->getPrevious() ?>"
           class="px-4 py-2 bg-white rounded-full text-[#b43b5c] shadow hover:bg-[#b43b5c] hover:text-white transition">
            ‹
        </a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <a href="<?= $link['uri'] ?>"
           class="px-4 py-2 rounded-full shadow
           <?= $link['active'] ? 'bg-[#b43b5c] text-white' : 'bg-white text-[#b43b5c]' ?>">
            <?= $link['title'] ?>
        </a>
    <?php endforeach ?>

    <?php if ($pager->hasNext()): ?>
        <a href="<?= $pager->getNext() ?>"
           class="px-4 py-2 bg-white rounded-full text-[#b43b5c] shadow hover:bg-[#b43b5c] hover:text-white transition">
            ›
        </a>
    <?php endif ?>

</div>
<?php endif ?>
