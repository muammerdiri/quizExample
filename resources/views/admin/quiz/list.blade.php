<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizler') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <td scope="row">{{$quiz->title}}</td>
                            <td>{{$quiz->status}}</td>
                            <td>{{$quiz->finished_at}}</td>
                            <td>
                                <a href="{{route('questions.index',$quiz->id)}}" class="btn btn-warning"><i class="fa fa-question"></i></a>
                                <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('quizzes.destroy',$quiz->id)}}" class="btn btn-danger"><i class="fa fa-times"></i></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        
            {{$quizzes->links()}}
        </div>
    </div>
    
</x-app-layout>
