@extends('dashboard.layouts.app')

@section('title', transWord('اللوائح والسياسات'))

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.regulations.index') }}">{{ transWord('اللوائح والسياسات') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="{{ route('admin.regulations.create') }}"><i class="mr-1"
                                        data-feather="circle"></i><span
                                        class="align-middle">{{ transWord('اضافه لوئح وسياسات جديده') }}
                                    </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ transWord('اسم') }}</th>
                                            <th>{{ transWord('اسم القسم') }}</th>
                                            <th>{{ transWord(' ملف pdf') }}</th>

                                            <th>{{ transWord('الإجراءات') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($regulations as $regulation)
                                        <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $regulation->name }}</td>
                                                <td>{{ $regulation->category?->name }}</td>
                                                <td class="text-center">
                                                    @if($regulation->pdf == null)
                                                        <img src="{{ asset('dashboard/images/notFile.png')  }}" alt="" width="30px" hight="30px">
                                                    @else

                                                    <a href="{{ $regulation->pdf_path }}" target="_blank">
                                                        <img src="{{ asset('dashboard/images/file.png')  }}" alt="" width="30px" hight="30px">
                                                    </a>
                                                    @endif

                                                </td>



                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                        <a href="{{ route('admin.regulations.edit', $regulation->id) }}"
                                                            class="btn btn-sm btn-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="{{ route('admin.regulations.destroy', $regulation->id) }}"
                                                            data-id="{{ $regulation->id }}"
                                                            class="btn btn-sm btn-danger item-delete"><i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @push('js')
        <script src="{{ asset('dashboard/app-assets/js/custom/custom-delete.js') }}"></script>
    @endpush
@endsection
