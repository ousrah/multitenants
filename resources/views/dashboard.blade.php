<x-app-layout title="CRM Analytics Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
    <div>
<h1>   Liste des cycles </h1>
       @foreach($cycles as $cycle)
       {{$cycle->name}}<br>
       @endforeach
       </div>
    </main>
</x-app-layout>
