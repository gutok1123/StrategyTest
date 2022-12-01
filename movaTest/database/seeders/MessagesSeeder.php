<?php

namespace Database\Seeders;

use App\Enum\Days\WeekdayMessageEnum;
use App\Models\Messages as MessagesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesSeeder extends Seeder
{

    public function __construct(protected MessagesModel $model)
    {
        
    }
    /**
     * Run the database seeds.
     *
    * @return void
     */
    public function run()
    {
        $this->model->insert([
          [
            'day_of_week'=> WeekdayMessageEnum::SUNDAY ,
            'message'=> 'Infelizmente Hoje é Domingo Meu brother :('
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::MONDAY ,
            'message'=> 'Segundou Meu patrão , bora trabalhar'
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::TUESDAY ,
            'message'=> 'Terça-feira , boa semana :)'
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::WEDNESDAY ,
            'message'=> 'Quarta-Feira, estamos quase lá guerreiro'
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::THURSDAY ,
            'message'=> 'Quinta-Feira , se você chegou até aqui aguente mais um pouco'
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::FRIDAY ,
            'message'=>'Sextouu time, quem fez fez é isso :)'
          ],
          [
            'day_of_week'=> WeekdayMessageEnum::SATURDAY ,
            'message'=> 'Sabadou, descansar porque o ser humano não é de ferro :)'
          ],
        ]);
    }
}
