<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz Oluştur') }}
        </h2>    
    </x-slot>
    <div class="card">
        <div class="card-body">
            <form action="{{route('quizzes.store')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="">Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <label for="">Quiz Açıklama</label>
                    <textarea  name="description" class="form-control" rows="4" ></textarea>
                </div>

                <div class="form-group mt-2">
                    <input id="isFinished" type="checkbox">
                    <label for="">Bitiş Tarihi olacak mı?</label>
                </div>

                <div id="finishedInput" style="display:none" class="form-group mt-2">
                    <label for="">Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control" >
                </div>

                <div  class="form-group mt-2">
                    <div class="row m-2">
                        <button type="submit" class="btn btn-success btn-sm  btn-block" >Quiz Oluştur</button>
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