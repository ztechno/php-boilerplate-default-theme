<div id="defaultSidebar" class="d-flex flex-column flex-shrink-0 bg-white shadow sidebar-default collapse">
    <div class="top-title-container px-3 py-1">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <?= app('logo') ?>
            <!-- <img class="me-2" src="" alt="" width="30" height="30"> -->
            <span class="app-name"><?= app('name') ?></span>
        </a>
    </div>
    <ul class="nav nav-pills p-3 ps-0 nav-sidebar">
        <?php foreach(get_menu() as $key => $module): ?>
        <li>
            <span class="module-name">
                <?= __($module['moduleName'].'.menu.module_name') ?>
            </span>    
        </li>
        <?php foreach($module['menu'] as $menu): ?>
        <li class="nav-item <?=isset($menu['items']) ? 'has-submenu' : ''?>">
            <a href="<?=isset($menu['items']) ? '#' : $menu['route'] ?>" class="nav-link fw-bold py-2 <?=getActive() == $menu['activeState'] ? 'active' : ''?>" >
                <i class="<?=$menu['icon']?>"></i>
                <span class="menu-label"><?=__($menu['label'])?></span>
                <?php if(isset($menu['items'])): ?>
                    <i class="fa-solid fa-caret-down"></i>
                <?php endif ?>
            </a>
            <ul class="submenu collapse">
                <?php if(isset($menu['items'])) foreach($menu['items'] as $item): ?>
                <li>
                    <a class="nav-link py-2" href="<?=$item['route']?>">
                        <i class="<?=$item['icon']?>"></i>
                        <span class="menu-label"><?=__($item['label'])?></span>
                    </a>
                </li>
                <?php endforeach ?>
            </ul>
        </li>
        <?php endforeach ?>
        <?php endforeach ?>
    </ul>
</div>