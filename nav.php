<nav class="navbar navbar-expand-lg navbar-dark navbar-default shadow-sm px-3">
    <div class="top-content-container d-flex flex-grow-1">
        <div style="width: 30px;">
            <div class="top-content-button-container">
                <button class="btn btn-default text-white toggle-sidebar p-0" type="button" aria-expanded="false" aria-label="Toggle navigation" aria-controls="defaultSidebar">
                    <i class="fa-solid fa-bars fa-2x"></i>
                </button>
            </div>
        </div>

        <?php if(get_module_name()): ?>
        <div class="ms-3 module-title d-flex align-items-center" style="line-height: 20px;">
            <div class="text-white ">
                <span class="d-block mb-0 fw-bold"><?= get_module_name() ?></span>
                <?php if(get_breadcrumbs()): ?>
                <ol class="breadcrumb mb-0">
                    <?php foreach(get_breadcrumbs() as $breadcrumb): ?>
                    <li class="breadcrumb-item">
                        <a href="<?=isset($breadcrumb['url']) ? $breadcrumb['url'] : 'javascript:void(0)'?>"><?=$breadcrumb['title']?></a>
                    </li>
                    <?php endforeach ?>
                </ol>
                <?php endif ?>
            </div>
        </div>
        <?php endif ?>

        <div class="ms-auto mb-2 mb-lg-0">
            <div class="dropdown">
                <a href="#" role="button" class="btn d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="me-2" style="text-align:right;line-height:20px;">
                        <span class="text-white d-block mb-0">Administrator</span>
                        <span class="badge bg-success">Admin</span>
                    </div>
                    <img class="rounded-circle" src="<?=asset('theme/assets/img/user-placeholder.jpg')?>" alt="" width="38" height="38">
                </a>
                <ul class="dropdown-menu" style="right:0;left:inherit">
                    <li><a class="dropdown-item" href="<?=routeTo('default/profile')?>">Profile</a></li>
                    <li><a class="dropdown-item" href="<?=routeTo('auth/logout')?>">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>