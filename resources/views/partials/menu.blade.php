<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('ms_category_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.ms-categories.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/ms-categories') || request()->is('admin/ms-categories/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.msCategory.title') }}
                </a>
            </li>
        @endcan
        @can('transaction_header_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.transaction-headers.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/transaction-headers') || request()->is('admin/transaction-headers/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.transactionHeader.title') }}
                </a>
            </li>
        @endcan
        @can('transaction_detail_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.transaction-details.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/transaction-details') || request()->is('admin/transaction-details/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.transactionDetail.title') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/permissions*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/users*') ? 'c-show' : '' }} {{ request()->is('admin/audit-logs*') ? 'c-show' : '' }} {{ request()->is('admin/teams*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.audit-logs.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('team_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.teams.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.team.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('provinsi_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.provinsis.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/provinsis') || request()->is('admin/provinsis/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fab fa-accusoft c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.provinsi.title') }}
                </a>
            </li>
        @endcan
        @can('kabupaten_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.kabupatens.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/kabupatens') || request()->is('admin/kabupatens/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fab fa-affiliatetheme c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.kabupaten.title') }}
                </a>
            </li>
        @endcan
        @can('penduduk_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.penduduks.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/penduduks') || request()->is('admin/penduduks/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.penduduk.title') }}
                </a>
            </li>
        @endcan
        @can('user_alert_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.user-alerts.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userAlert.title') }}
                </a>
            </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.systemCalendar') }}"
                class="c-sidebar-nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'c-active' : '' }}">
                <i class="c-sidebar-nav-icon fa-fw fas fa-calendar">

                </i>
                {{ trans('global.systemCalendar') }}
            </a>
        </li>
        @php($unread = \App\Models\QaTopic::unreadCount())
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.messenger.index') }}"
                class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'c-active' : '' }} c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                </i>
                <span>{{ trans('global.messages') }}</span>
                @if ($unread > 0)
                    <strong>( {{ $unread }} )</strong>
                @endif

            </a>
        </li>
        @if (
            \Illuminate\Support\Facades\Schema::hasColumn('teams', 'owner_id') &&
                \App\Models\Team::where('owner_id', auth()->user()->id)->exists())
            <li class="c-sidebar-nav-item">
                <a class="{{ request()->is('admin/team-members') || request()->is('admin/team-members/*') ? 'c-active' : '' }} c-sidebar-nav-link"
                    href="{{ route('admin.team-members.index') }}">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-users">
                    </i>
                    <span>{{ trans('global.team-members') }}</span>
                </a>
            </li>
        @endif
        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                        href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
