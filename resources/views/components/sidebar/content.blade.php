<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-3 px-3"
>
    <!-- Dashboard -->
    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!-- Transition - ALUNOS -->

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-700 dark:text-gray-300"
    >
        {{__('Students')}}
    </div>

    <x-sidebar.link
        title="{{__('Student File')}}"
        href="{{route('student.index')}}"
        :isActive="request()->routeIs('student.index', 'student.create', 'student.edit')"
    >
        <x-slot name="icon">
            <x-icons.person class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="{{__('Frequency List')}}"
        href="{{route('example.link')}}"
        :isActive="request()->routeIs('teste')"
    >
        <x-slot name="icon">
            <x-icons.frequency class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="{{__('Diagnostic Registration')}}"
        href="{{route('diagnostic.index')}}"
        :isActive="request()->routeIs('diagnostic.index', 'diagnostic.create', 'diagnostic.edit')"
    >
        <x-slot name="icon">
            <x-icons.diagnostic class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!-- Transition - REUNIÕES -->

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-700 dark:text-gray-300"
    >
        {{__('Events')}}
    </div>

    <x-sidebar.link
        title="{{__('Reunions Records')}}"
        href="{{route('record.index')}}"
        :isActive="request()->routeIs('record.index', 'record.create', 'record.edit')"
    >
        <x-slot name="icon">
            <x-icons.meeting class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>


    <!-- Transition - ADMIN -->

    @can('admin-view')

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-700 dark:text-gray-300"
    >
        {{__('Admin')}}
    </div>

    <x-sidebar.link
        title="{{__('Expense Control')}}"
        href="{{route('expense.index')}}"
        :isActive="request()->routeIs('expense.index', 'expense.create', 'expense.edit')"
    >
        <x-slot name="icon">
            <x-icons.expense class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="{{ __('Donation Control')}}"
        href="{{route('donation.index')}}"
        :isActive="request()->routeIs('donation.index', 'donation.create', 'donation.edit')"
    >
        <x-slot name="icon">
            <x-icons.partner class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    @endcan

</x-perfect-scrollbar>

{{--  Exemplo de um link com sublinks:

    <x-sidebar.dropdown
        title="{{ __('Partnes') }}"
        :active="Str::startsWith(request()->route()->uri(),'donation')"
    >
        <x-slot name="icon">
            <x-icons.partner class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="{{ __('Donation Control') }}"
            href="{{ route('adminsla') }}"
            :active="request()->routeIs('teste')"
        />
        <x-sidebar.sublink
            ........
        />
    </x-sidebar.dropdown>

--}}