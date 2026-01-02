@extends('admin.layouts.app')

@section('title', 'CRUD User')

@section('admin_content')

<!-- ==================== WRAPPER HALAMAN START ==================== -->
<div class="h-100 d-flex flex-column">

    <!-- ==================== HEADER HALAMAN START ==================== -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="mb-0 fw-semibold" style="color:#2f2f2f">
                Daftar Mahasiswa
            </h4>
            <small class="text-muted">
                Kelola data user yang terdaftar
            </small>
        </div>

        <a
            href="{{ route('admin.user.create') }}"
            class="btn btn-sm fw-semibold"
            style="background:#B9F04F;color:#1f1f1f;border-radius:6px;border:1px solid transparent;"
            onmouseover="this.style.border='1px solid #6fae2e'"
            onmouseout="this.style.border='1px solid transparent'"
        >
            + Tambah User
        </a>
    </div>
    <!-- ==================== HEADER HALAMAN END ==================== -->

    <!-- ==================== TABLE WRAPPER START ==================== -->
    <div
        class="flex-grow-1"
        style="overflow-y:auto;background:#ffffff;border-radius:12px;border:1px solid #e9ecef;box-shadow:0 6px 16px rgba(0,0,0,.04);"
    >

        <!-- ==================== TABLE START ==================== -->
        <table
            class="table table-sm align-middle mb-0"
            style="border-collapse:separate;border-spacing:0"
        >

            <!-- ==================== TABLE HEADER START ==================== -->
            <thead
                class="sticky-top"
                style="background:#f8f9fa;z-index:2;border-bottom:1px solid #dee2e6;"
            >
                <tr style="font-size:13px;color:#6c757d">
                    <th class="py-3 px-4">Username</th>
                    <th class="py-3 px-4">Password</th>
                    <th class="py-3 text-center" width="20%">Aksi</th>
                </tr>
            </thead>
            <!-- ==================== TABLE HEADER END ==================== -->

            <!-- ==================== TABLE BODY START ==================== -->
            <tbody style="font-size:14px;color:#2f2f2f">

                @forelse ($users as $user)
                <tr
                    style="transition:.2s"
                    onmouseover="this.style.background='#f9fbe7'"
                    onmouseout="this.style.background='transparent'"
                >

                    <td class="px-4 fw-semibold">
                        {{ $user->username }}
                    </td>

                    <td class="px-4 text-muted">
                        ********
                    </td>

                    <td class="text-center">

                        <!-- ==================== BUTTON EDIT START ==================== -->
                        <a
                            href="{{ route('admin.user.edit', $user->id) }}"
                            class="btn btn-sm me-1"
                            style="background:#fff3cd;color:#664d03;border-radius:6px;border:1px solid #ffe69c;"
                        >
                            Edit
                        </a>
                        <!-- ==================== BUTTON EDIT END ==================== -->

                        <!-- ==================== FORM DELETE START ==================== -->
                        <form
                            action="{{ route('admin.user.destroy', $user->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus user ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-sm"
                                style="background:#f8d7da;color:#842029;border-radius:6px;border:1px solid #f5c2c7;"
                            >
                                Hapus
                            </button>
                        </form>
                        <!-- ==================== FORM DELETE END ==================== -->

                    </td>
                </tr>

                @empty
                <!-- ==================== EMPTY STATE START ==================== -->
                <tr>
                    <td
                        colspan="3"
                        class="text-center py-5"
                        style="color:#adb5bd"
                    >
                        <div class="fw-semibold mb-1">
                            Data user belum tersedia
                        </div>
                        <small>
                            Silakan tambahkan user baru
                        </small>
                    </td>
                </tr>
                <!-- ==================== EMPTY STATE END ==================== -->
                @endforelse

            </tbody>
            <!-- ==================== TABLE BODY END ==================== -->

        </table>
        <!-- ==================== TABLE END ==================== -->

    </div>
    <!-- ==================== TABLE WRAPPER END ==================== -->

</div>
<!-- ==================== WRAPPER HALAMAN END ==================== -->

@endsection
