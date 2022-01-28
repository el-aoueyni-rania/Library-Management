<div class="span3" >
    <div class="sidebar" >
        <br><br><br><br><br>
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL::route('homeUser') }}">
                    <i class="menu-icon icon-home"></i> <strong> Home </strong>
                </a>
            </li>
            
            <li>
                <a href="{{ URL::route('all-booksuser') }}">
                    <i class="menu-icon icon-th-list"></i><strong> All Books in Library </strong> 
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="menu-icon fas fa-search"></i><strong> Find Book </strong> 
                </a>
            </li>
           
            <li>
                <a href="{{ URL::route('add-bookuser') }}">
                    <i class="menu-icon fas fa-plus"></i><strong> Add Book </strong> 
                </a>
            </li>
            
            <li>
                <a href="#">
                    <i class="menu-icon icon-list-ul"></i> <strong>  List Of Borrowed Books  </strong> 
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="menu-icon icon-cog"></i> <strong>  Settings </strong> 
                </a>
            </li>

        </ul>
        
        <ul class="widget widget-menu unstyled">
            <li><a href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i><strong> Logout </strong> </a></li>
        </ul>
    </div>
</div>