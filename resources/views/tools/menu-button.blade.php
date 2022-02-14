<div class="btn-group pull-right" style="margin-right: 5px">
        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cog"></i>&nbsp;<span class="hidden-xs">{{ $button_label }}&nbsp;</span>
            <span class="caret"></span>
        </button>
        <ul id="custom-table-menu" class="dropdown-menu">
            @foreach($menulist as $menu)
                <li><a href="{{ array_get($menu, 'href', 'javascript:void(0);') }}" data-url="{{ array_get($menu, 'url') }}" data-direct="{{ boolval(array_get($menu, 'direct')) ? '1' : '0' }}" data-edit="{{ boolval(array_get($menu, 'move_edit')) ? '1' : '0' }}"><i class="fa {{ array_get($menu, 'icon') }}"></i>&nbsp;{{exmtrans(array_get($menu, 'exmtrans'))}}</a></li>
            @endforeach
        </ul>
    </div>    