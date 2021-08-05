<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem-Vindo(a)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
            <table class="table">
  
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matrícula</th>
                        <th scope="col">Curso</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                            <td>Mark</td>
                            <td>1472</td>
                            <td>Física</td>                          
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>5836</td>
                            <td>Biologia</td>
                    </tr>
    
                    <tr>
                        <th scope="row">3</th>
                            <td>Larry</td>
                            <td>9014</td>
                            <td>Química</td>
                    </tr>
                </tbody>
            </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>