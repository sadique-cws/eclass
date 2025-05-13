@extends('admin.adminlayout')

@section('content')
<div class="container-fluid dashboard-container">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header">
                <h2 class="page-title">Manage Admissions</h2>
                <div class="header-actions">
                    <div class="admission-count">
                        <span class="badge bg-warning">{{ count($admissions) }} Pending</span>
                    </div>
                    <a href="" class="btn-create">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        <span>Add New Admission</span>
                    </a>
                </div>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Education</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admissions as $ad)
                            <tr>
                                <td>{{$ad->id}}</td>
                                <td>
                                    <div class="student-info">
                                        <div class="avatar admission-avatar">{{substr($ad->name, 0, 1)}}</div>
                                        <span>{{$ad->name}}</span>
                                    </div>
                                </td>
                                <td>{{$ad->contact}}</td>
                                <td>{{$ad->email}}</td>
                                <td>{{$ad->education}}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.StudentApprove', $ad->id) }}" class="btn-approve" title="Approve admission">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                            <span>Approve</span>
                                        </a>
                                        <a href="" class="btn-cancel" title="Cancel admission">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <span>Cancel</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* Specific to admission page */
.admission-avatar {
    background-color: #ffa94d;
}

.btn-approve {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    background-color: rgba(64, 192, 87, 0.1);
    color: #40c057;
    transition: all 0.2s ease;
}

.btn-approve:hover {
    background-color: rgba(64, 192, 87, 0.2);
}

.btn-cancel {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    background-color: rgba(255, 107, 107, 0.1);
    color: #ff6b6b;
    transition: all 0.2s ease;
}

.btn-cancel:hover {
    background-color: rgba(255, 107, 107, 0.2);
}
</style>
@endsection
