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

                <?php $con=mysqli_connect("localhost","root","","laravel");
	                $result=mysqli_query($con,"SELECT*FROM alunos");?>                
            <table class="table"> <h3><center> Lista de Alunos </center></h3>
  
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data Nasc</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php while($row=mysqli_fetch_array($result)){?>
                        <tr>
                                <td> <?php echo $row['idAlunos'];?> </td>
	                            <td> <?php echo $row['nome'];?> </td>
	                            <td> <?php echo $row['email'];?> </td>
	                            <td> <?php echo $row['datanasc'];?> </td>                         
                        </tr>
                </tbody>
                <?php } mysqli_close($con); ?>
            </table>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <?php $con=mysqli_connect("localhost","root","","laravel");
	                $result=mysqli_query($con,"SELECT*FROM curso");?>                
            <table class="table"><h3><center> Lista de Cursos </center></h3>
  
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php while($row=mysqli_fetch_array($result)){?>
                        <tr>
                                <td> <?php echo $row['idCurso'];?> </td>
	                            <td> <?php echo $row['titulo'];?> </td>
	                            <td> <?php echo $row['descricao'];?> </td>                 
                        </tr>
                </tbody>
                <?php } mysqli_close($con); ?>
            </table>
                </div>
            </div>
        </div>

</x-app-layout>