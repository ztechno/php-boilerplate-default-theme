<div id="defaultSidebar" class="d-flex flex-column flex-shrink-0 bg-white shadow sidebar-default collapse">
    <div class="top-title-container px-3 py-1">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="42" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
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