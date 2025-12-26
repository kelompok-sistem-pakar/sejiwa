@extends('layouts.app')

@section('content')

<!-- ==================== STYLE START ==================== -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap');

    body {
        font-family: 'Bricolage Grotesque', sans-serif;
        background-color: #f4f7f6;
    }

    /* SIDEBAR WRAPPER */
    .sidebar-wrapper {
        position: fixed;
        width: 300px;
        top: 85px;
        border: 5px solid rgba(186, 240, 79, 0.2);
        background: #ffffff;
        border-radius: 20px;
        padding: 30px 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        z-index: 10;
    }

    /* STEPPER CONTAINER */
    .stepper-container {
        padding-left: 5px;
        margin-top: 20px;
    }

    /* STEP ITEM */
    .step-item {
        position: relative;
        display: flex;
        align-items: center;
        gap: 15px;
        padding-bottom: 35px;
    }

    .step-item:not(:last-child)::before {
        content: "";
        position: absolute;
        left: 16.5px;
        top: 35px;
        width: 2px;
        height: calc(100% - 30px);
        background: #e9ecef;
        z-index: 1;
    }

    .step-item.completed:not(:last-child)::before {
        background: #B9F04F;
    }

    /* STEP CIRCLE */
    .step-circle {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #ced4da;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .step-item.active .step-circle,
    .step-item.completed .step-circle {
        border-color: #B9F04F;
        background: #B9F04F;
    }

    .step-circle::after {
        content: "";
        width: 8px;
        height: 8px;
        background: #ced4da;
        border-radius: 50%;
    }

    .step-item.active .step-circle::after,
    .step-item.completed .step-circle::after {
        background: #fff;
    }

    .step-item.active .step-circle {
        box-shadow: 0 0 0 6px rgba(186, 240, 79, 0.4);
    }

    /* STEP CONTENT */
    .step-content-card {
        padding: 10px 15px;
        border-radius: 15px;
        flex-grow: 1;
        transition: all 0.3s ease;
    }

    .step-item.active .step-content-card {
        background: rgba(186, 240, 79, 0.23);
        border: 1px solid rgba(186, 240, 79, 0.3);
    }

    .step-title {
        font-weight: 700;
        font-size: 0.95rem;
        color: #adb5bd;
        margin: 0 !important;
        line-height: 1.2;
    }

    .step-item.active .step-title,
    .step-item.completed .step-title {
        color: #212529;
    }

    .step-desc {
        font-size: 0.8rem;
        color: #adb5bd;
        margin: 2px 0 0 0 !important;
        line-height: 1.2;
    }

    .step-item.active .step-desc,
    .step-item.completed .step-desc {
        color: #6c757d;
    }

    /* MAIN CONTENT */
    .main-content-area {
        margin-left: 340px;
        padding-top: 0px;
    }
</style>
<!-- ==================== STYLE END ==================== -->

<!-- ==================== LAYOUT WRAPPER START ==================== -->
<div class="container-fluid py-5 px-md-5">
    <div class="row">

        <!-- ==================== SIDEBAR START ==================== -->
        <div class="col-md-3">
            <div class="sidebar-wrapper">
                <h5 class="fw-bold mb-4 ps-2" style="color:#212529;">Konsultasi</h5>

                <div class="stepper-container">
                    @php
                        $currentPath = request()->path();
                        if (str_contains($currentPath, 'step1')) $currentStep = 1;
                        elseif (str_contains($currentPath, 'step2')) $currentStep = 2;
                        elseif (str_contains($currentPath, 'step3')) $currentStep = 3;
                        elseif (str_contains($currentPath, 'step4')) $currentStep = 4;
                        else $currentStep = 1;

                        $steps = [
                            1 => ['title' => 'Step One', 'desc' => 'Isi data diri Anda'],
                            2 => ['title' => 'Step Two', 'desc' => 'Pilih gejala dirasakan'],
                            3 => ['title' => 'Step Three', 'desc' => 'Review kembali jawaban'],
                            4 => ['title' => 'Step Four', 'desc' => 'Hasil konsultasi'],
                        ];
                    @endphp

                    @foreach ($steps as $num => $step)
                        @php
                            $status = '';
                            if ($currentStep == $num) $status = 'active';
                            elseif ($currentStep > $num) $status = 'completed';
                        @endphp

                        <div class="step-item {{ $status }}">
                            <div class="step-circle"></div>
                            <div class="step-content-card">
                                <p class="step-title">{{ $step['title'] }}</p>
                                <p class="step-desc">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ==================== SIDEBAR END ==================== -->

        <!-- ==================== MAIN CONTENT START ==================== -->
        <div class="col-md-9 main-content-area">
            <div class="card border-0 shadow-sm p-4" style="border-radius:20px;min-height:90vh;background:#ffffff;margin-top:-45px;">
                @yield('konsultasi_content')
            </div>
        </div>
        <!-- ==================== MAIN CONTENT END ==================== -->

    </div>
</div>
<!-- ==================== LAYOUT WRAPPER END ==================== -->

@endsection
