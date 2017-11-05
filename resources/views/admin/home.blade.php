@extends('layouts.admin')

@section('pageTitle')
	Home
@endsection

@section('content')

   @include('admin.userSummary')
   @include('admin.headerSection')
   @include('admin.projectsSection')
   @include('admin.clientSection')
   @include('admin.feedsSection')
   @include('admin.updatesSection')
@endsection