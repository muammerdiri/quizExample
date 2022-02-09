<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Düzenleme') }}
        </h2>    
    </x-slot>
   
    <div class="card">
        
        <div class="card-body">
            <form action="{{route('quizzes.update',$quiz->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group mt-2">
                    <label for="">Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div>

                <div class="form-group mt-2">
                    <label for="">Quiz Açıklama</label>
                    <textarea  name="description" class="form-control"  rows="4" >{{$quiz->description}}</textarea>
                </div>

                <div class="form-group mt-2">
                    <input id="isFinished"  @if ($quiz->finished_at)@endif type="checkbox">
                    <label for="">Bitiş Tarihi olacak mı?</label>
                </div>

                <div id="finishedInput" @if (!$quiz->finished_at) style="display:none" @endif class="form-group mt-2">
                    <label for="">Bitiş Tarihi</label>
                    <input type="datetime-local" @if($quiz->finished_at) value="{{date('Y-m-d\TH:i'),strtotime($quiz->finished_at)}}" @endif name="finished_at" class="form-control" >
                </div>

                <div  class="form-group mt-2">
                    <div class="row m-2">
                        <button type="submit" class="btn btn-success btn-sm  btn-block" >Quiz Düzenle</button>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
    <x-slot name='js'>
        <script>
            $('#isFinished').change(function(){
                if ($('#isFinished').is(':checked')) {
                    $('#finishedInput').show();    
                }else{
                    $('#finishedInput').hide();    
                }
                
            })
        </script>
    </x-slot>
</x-app-layout>