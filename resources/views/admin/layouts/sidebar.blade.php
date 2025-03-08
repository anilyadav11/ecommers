<div class="sidebar-wrapper">
    <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Dashboard
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>

            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Products
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.product.create')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.product.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Categorys
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.category.create')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Product Categorys
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.productcategory.create')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Add</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.productcategory.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Orders
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.productcategory.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>
                        Setting
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('admin.settings.edit',1)}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>setting</p>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <!--end::Sidebar Menu-->
    </nav>
</div>