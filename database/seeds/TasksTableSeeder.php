<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Folder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $folders = Folder::get();

        foreach($folders as $folder){
            foreach (range(1, 3) as $num) {
                DB::table('tasks')->insert([
                    'folder_id' => $folder->id,
                    'title' => "サンプルタスク {$num}",
                    'status' => $num,
                    'due_date' => Carbon::now()->addDay($num),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }



    }
}
