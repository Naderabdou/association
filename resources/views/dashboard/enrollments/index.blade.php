@extends('dashboard.layouts.app')

@section('title', transWord('طلبات التحاق ببرنامج التمكين'))
@push('css')
    <style>
        .badge-golden {
            background-color: gold;
            color: black;
            /* Choose a color that provides good contrast against the golden background */
        }
    </style>
@endpush
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
                                            href="{{  $type === 'empowerment' ? route('admin.enrollment.index', $type) : route('admin.enrollment_innovation.index',$type)}}">{{ $type === 'empowerment' ? transWord('طلبات التحاق ببرنامج التمكين') : transWord('طلبات التحاق ببرنامج الابتكار الاجتماعي') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

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
                                            <th>{{ transWord('name') }}</th>
                                            <th>{{ transWord('phone') }}</th>
                                            <th>{{ transWord('email') }}</th>
                                            <th>{{ transWord('رقم الهوية') }}</th>
                                            <th>{{ transWord('المؤهل') }}</th>
                                            <th>{{ transWord('نوع العضوية') }}</th>
                                            <th>{{ transWord('نوع العضو') }}</th>
                                            <th>{{ transWord('الإجراءات') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($enrollments as $membership)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $membership->name }}</td>

                                                <td>
                                                    <a href="tel:{{ $membership->phone }}">{{ $membership->phone }}</a>
                                                </td>

                                                <td>
                                                    <a href="mailTo:{{ $membership->email }}">{{ $membership->email }}</a>
                                                </td>

                                                <td>{{ $membership->ID_number }}</td>


                                                <td>{{ $membership->certificate }}</td>

                                                <td>
                                                    @if ($membership->membership_type == 'affiliate')
                                                        <span class="badge badge-light-primary">{{ transWord('منتسب') }}
                                                            <i class="fa-solid fa-user"></i></span>
                                                        </span>
                                                    @elseif ($membership->membership_type == 'innovative')
                                                        <span class="badge badge-golden">{{ transWord('مبتكر') }}
                                                            <i class="fa-solid fa-star"></i></span>
                                                        </span>
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($membership->type == 'student')
                                                        <span class="badge badge-light-primary">{{ transWord('طالب') }}
                                                            <i class="fa-solid fa-user"></i></span>
                                                        </span>
                                                    @elseif ($membership->type == 'private_sector')
                                                        <span
                                                            class="badge badge-light-info">{{ transWord('موظف قطاع خاص') }}
                                                            <i class="fas fa-building"></i>
                                                        </span>
                                                    @elseif ($membership->type == 'government_sector')
                                                        <span
                                                            class="badge badge-light-success">{{ transWord('موظف قطاع حكومي') }}
                                                            <i class="fas fa-university"></i></span>
                                                        </span>
                                                    @endif
                                                </td>










                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">


                                                        <a href="#" class="btn btn-info btn-circle btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#exampleModalLong{{ $membership->id }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModalLong{{ $membership->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                                {{ transWord('تفاصيل طالب العضوية') }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('الاسم') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->name }}

                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('phone') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->phone }}
                                                                        </div>

                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('email') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->email }}
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('رقم الهوية') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{-- {{ Str::limit($blog->desc_en, 100, '...') }} --}}
                                                                            {{ $membership->ID_number }}
                                                                        </div>

                                                                    </div>





                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('تاريخ الميلاد') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->birth_date }}
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('المؤهل') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->certificate }}
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('التخصص') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            {{ $membership->specialization }}
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('نوع العضوية') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            @if ($membership->membership_type == 'affiliate')
                                                                                <span
                                                                                    class="badge badge-light-primary">{{ transWord('منتسب') }}
                                                                                    <i class="fa-solid fa-user"></i></span>
                                                                                </span>
                                                                            @elseif ($membership->membership_type == 'innovative')
                                                                                <span
                                                                                    class="badge badge-golden">{{ transWord('مبتكر') }}
                                                                                    <i class="fa-solid fa-star"></i></span>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-5">
                                                                            <b>{{ transWord('نوع العضو') }} : </b>
                                                                        </div>
                                                                        <div class="col-lg-7">
                                                                            @if ($membership->type == 'student')
                                                                                <span
                                                                                    class="badge badge-light-primary">{{ transWord('طالب') }}
                                                                                    <i class="fa-solid fa-user"></i></span>
                                                                                </span>
                                                                            @elseif ($membership->type == 'private_sector')
                                                                                <span
                                                                                    class="badge badge-light-info">{{ transWord('موظف قطاع خاص') }}
                                                                                    <i class="fas fa-building"></i>
                                                                                </span>
                                                                            @elseif ($membership->type == 'government_sector')
                                                                                <span
                                                                                    class="badge badge-light-success">{{ transWord('موظف قطاع حكومي') }}
                                                                                    <i
                                                                                        class="fas fa-university"></i></span>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    







                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">{{ __('إغلاق') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
