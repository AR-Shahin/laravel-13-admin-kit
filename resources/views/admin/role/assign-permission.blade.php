@extends("admin.layouts.master")

@section("title","Assign Permission")

@section("master_content")

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                {{-- {{ dd($permissions) }} --}}
                <div class="d-flex justify-content-between">
                    <div>
                        <h3>Assign Permisson to <b><small class="text-info">{{ $role->name }}</small></b></h3>
                    </div>
                    <div>
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-sm btn-success">Back</a>
                    </div>
                </div>
                <hr>


                 {{-- <form action="{{ route("admin.roles.assign__permission",$role->id) }}" method="post">
                    @csrf
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-view-tab" data-toggle="pill" href="#pills-view" role="tab" aria-controls="pills-view" aria-selected="true">View</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-create-tab" data-toggle="pill" href="#pills-create" role="tab" aria-controls="pills-create" aria-selected="false">Create</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-edit-tab" data-toggle="pill" href="#pills-edit" role="tab" aria-controls="pills-edit" aria-selected="false">Edit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-update-tab" data-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false">Update</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-delete-tab" data-toggle="pill" href="#pills-delete" role="tab" aria-controls="pills-delete" aria-selected="false">Delete</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-other-tab" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false">Other</a>
                          </li>
                      </ul>
                      <hr>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-view" role="tabpanel" aria-labelledby="pills-view-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All
                                @foreach ($permissionArrays["view"] as $permission)
                                <p class="m-0"><input type="checkbox" class="mx-1"
                                    value="{{ $permission["id"] }}"
                                    name="permissions[]"
                                    @if (in_array($permission["id"],$alreadyGiven))
                                        checked
                                    @endif
                                    >{{ $permission["name"] }}</p>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-create" role="tabpanel" aria-labelledby="pills-create-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All
                            @foreach ($permissionArrays["create"] as $permission)
                            <p class="m-0"><input type="checkbox" class="mx-1"
                                value="{{ $permission["id"] }}"
                                name="permissions[]"
                                @if (in_array($permission["id"],$alreadyGiven))
                                    checked
                                @endif
                                >{{ $permission["name"] }}</p>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All

                            @foreach ($permissionArrays["edit"] as $permission)
                            <p class="m-0"><input type="checkbox" class="mx-1"
                                value="{{ $permission["id"] }}"
                                name="permissions[]"
                                @if (in_array($permission["id"],$alreadyGiven))
                                    checked
                                @endif
                                >{{ $permission["name"] }}</p>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-update-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All

                            @foreach ($permissionArrays["update"] as $permission)
                            <p class="m-0"><input type="checkbox" class="mx-1"
                                value="{{ $permission["id"] }}"
                                name="permissions[]"
                                @if (in_array($permission["id"],$alreadyGiven))
                                    checked
                                @endif
                                >{{ $permission["name"] }}</p>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-delete" role="tabpanel" aria-labelledby="pills-delete-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All

                            @foreach ($permissionArrays["delete"] as $permission)
                            <p class="m-0"><input type="checkbox" class="mx-1"
                                value="{{ $permission["id"] }}"
                                name="permissions[]"
                                @if (in_array($permission["id"],$alreadyGiven))
                                    checked
                                @endif
                                >{{ $permission["name"] }}</p>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
                            <input type="checkbox" onclick="addCheckboxClick"> Choose All

                            @foreach ($permissionArrays["other"] as $permission)
                            <p class="m-0"><input type="checkbox" class="mx-1"
                                value="{{ $permission["id"] }}"
                                name="permissions[]"
                                @if (in_array($permission["id"],$alreadyGiven))
                                    checked
                                @endif
                                >{{ $permission["name"] }}</p>
                        @endforeach
                        </div>
                      </div>
                    <div class="my-2">
                        <button class="btn btn-sm btn-success">Submit</button>
                    </div>
                </form> --}}
                <!-- Search and Bulk Actions -->
                <div class="sticky-top bg-white pt-2 pb-3 mb-4 border-bottom" style="z-index: 100; top: 0;">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="input-group shadow-sm" style="border-radius: 25px; overflow: hidden;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-right-0"><i class="fas fa-search text-muted"></i></span>
                                </div>
                                <input type="text" id="moduleSearch" class="form-control border-left-0" placeholder="Search modules (e.g. User, Role...)" style="height: 45px;">
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group shadow-sm" role="group">
                                <button type="button" class="btn btn-outline-secondary btn-sm global-select" data-action="view">View All</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm global-select" data-action="create">Create All</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm global-select" data-action="edit">Edit All</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm global-select" data-action="delete">Delete All</button>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route("admin.roles.assign__permission", $role->id) }}" method="post" id="permissionForm">
                    @csrf
                    <div class="module-container">
                        @foreach ($modules as $moduleName => $permissions)
                        <div class="module-row border-bottom py-3 px-2 transition-all hover-bg-light" data-name="{{ strtolower($moduleName) }}">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox mr-3">
                                            <input type="checkbox" class="custom-control-input select-all-module" id="all_{{ $moduleName }}" data-module="{{ $moduleName }}">
                                            <label class="custom-control-label" for="all_{{ $moduleName }}"></label>
                                        </div>
                                        <h6 class="mb-0 font-weight-bold text-dark text-uppercase small" style="letter-spacing: 1px;">{{ $moduleName }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex flex-wrap">
                                        @foreach ($permissions as $permission)
                                        <div class="permission-chip mr-2 mb-1">
                                            <input type="checkbox" class="d-none permission-input-{{ $moduleName }} action-{{ $permission['action'] }}" 
                                                   id="p_{{ $permission['id'] }}" 
                                                   name="permissions[]" 
                                                   value="{{ $permission['id'] }}"
                                                   {{ in_array($permission['id'], $alreadyGiven) ? 'checked' : '' }}
                                                   data-module="{{ $moduleName }}"
                                                   data-action="{{ $permission['action'] }}">
                                            <label for="p_{{ $permission['id'] }}" class="chip-label px-3 py-1 border rounded-pill small font-weight-bold transition-all" style="cursor: pointer;">
                                                {{ strtoupper($permission['action']) }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="sticky-footer bg-white border-top p-3 text-right mt-5 shadow-lg" style="position: sticky; bottom: 0; margin: 0 -15px; border-radius: 0 0 10px 10px; z-index: 101;">
                        <div class="container-fluid d-flex justify-content-between align-items-center">
                            <div class="text-left">
                                <span class="badge badge-soft-primary p-2" style="font-size: 0.9rem;">
                                    <i class="fas fa-check-circle mr-1"></i> <span id="totalSelectedCount">0</span> PERMISSIONS SELECTED
                                </span>
                            </div>
                            <button class="btn btn-sync btn-lg shadow-lg px-5" style="border-radius: 5px; font-weight: 800; letter-spacing: 2px;">
                                SYNC PERMISSIONS
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@stop


@push("css")
<style>
    .module-row:last-child { border-bottom: none !important; }
    .hover-bg-light:hover { background-color: #fcfcfc; }
    .transition-all { transition: all 0.2s ease; }
    
    /* Chip Styling - Matching Sidebar Dark */
    .chip-label { 
        background: #fff; 
        color: #495057; 
        border-color: #dee2e6 !important;
        user-select: none;
    }
    .permission-chip input:checked + .chip-label {
        background: #343a40; /* AdminLTE Sidebar Dark */
        color: #fff;
        border-color: #343a40 !important;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    
    .badge-soft-primary { background-color: #f4f6f9; color: #343a40; border: 1px solid #dee2e6; }
    .sticky-top { backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.9) !important; }
    
    #moduleSearch:focus { box-shadow: none; border-color: #343a40; }

    /* Sync Button - Matching Sidebar */
    .btn-sync {
        background: #343a40;
        color: #fff;
        border: none;
        transition: all 0.3s;
    }
    .btn-sync:hover {
        background: #23272b;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
</style>
@endpush

@push("script")
    <script>
    $(document).ready(function() {
        updateTotalCount();

        // Search Filter
        $('#moduleSearch').on('keyup', function() {
            const value = $(this).val().toLowerCase();
            $('.module-row').filter(function() {
                $(this).toggle($(this).data('name').indexOf(value) > -1);
            });
        });

        // Module-specific Select All
        $('.select-all-module').on('change', function() {
            const moduleName = $(this).data('module');
            $(`.permission-input-${moduleName}`).prop('checked', $(this).prop('checked')).trigger('change');
        });

        // Global Action Select (View All, Create All, etc)
        $('.global-select').on('click', function() {
            const action = $(this).data('action');
            // Target inputs where the parent module-row is visible (to respect search filter)
            const visibleModules = $('.module-row:visible');
            const targetInputs = visibleModules.find(`.action-${action}`);
            
            const allChecked = targetInputs.length > 0 && targetInputs.length === targetInputs.filter(':checked').length;
            
            targetInputs.prop('checked', !allChecked).trigger('change');
            
            // Visual feedback for the button
            if (!allChecked) {
                $(this).addClass('bg-dark text-white');
            } else {
                $(this).removeClass('bg-dark text-white');
            }
        });

        // Sync Individual Checkboxes
        $('input[name="permissions[]"]').on('change', function() {
            updateTotalCount();
            const moduleName = $(this).data('module');
            const total = $(`.permission-input-${moduleName}`).length;
            const checked = $(`.permission-input-${moduleName}:checked`).length;
            $(`#all_${moduleName}`).prop('checked', total === checked);
        });

        function updateTotalCount() {
            $('#totalSelectedCount').text($('input[name="permissions[]"]:checked').length);
        }
    });
    </script>
@endpush
