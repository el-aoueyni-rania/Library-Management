<div class="span3" >
        <ul class="widget widget-menu unstyled">
            <li>
                <a href="{{ URL::route('home') }}">
                    <i class="menu-icon icon-home"></i> <strong> Home </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('students-for-approval') }}">
                    <i class="menu-icon icon-filter"></i>  <strong> All Waiting Students </strong>  
                </a>
            </li>
            <li>
                <a href="{{ URL::route('registered-students') }}">
                    <i class="menu-icon icon-group"></i> <strong> All approved Students</strong>  
                </a>
            </li>
            <li>
                <a href="{{ URL::route('all-categories') }}">
                    <i class="menu-icon icon-th-list"></i> <strong> All Books in Library </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-book-category') }}">
                    <i class="menu-icon icon-folder-open-alt"></i> <strong> Add Category </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('add-books') }}">
                    <i class="menu-icon icon-folder-open-alt"></i> <strong> Add Books </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('settings') }}">
                    <i class="menu-icon icon-cog"></i> <strong> Add Settings </strong> 
                </a>
            </li>

            <li>
                <a href="{{ URL::route('issue-return') }}">
                    <i class="menu-icon icon-signout"></i> <strong> Issue / Return Books </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('currently-issued') }}">
                    <i class="menu-icon icon-list-ul"></i> <strong> View all currently issued books   </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('listemprunt') }}">
                    <i class=" menu-icon fas fa-book-reader"></i>  <strong> List Emprunts   </strong> 
                </a>
            </li>
            <li>
                <a href="{{ URL::route('listempruntconfirmer') }}">
                    <i class=" menu-icon fas fa-book-reader"></i>  <strong> List Emprunts Confirmer  </strong> 
                </a>
            </li>

            <li>
                <a href="{{ URL::route('listeretard') }}">
                    <i class=" menu-icon fas fa-book-reader"></i>  <strong> List Retard Book  </strong> 
                </a>
            </li>

            <li>
                <a href="{{ URL::route('listuser') }}">
                    <i class="menu-icon fas fa-users"></i>  <strong> Users   </strong> 
                </a>
            </li>
        </ul>
        
        <ul class="widget widget-menu unstyled">
            <li><a href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i> <strong> Logout </strong>  </a></li>
        </ul>
</div>