<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('admins')->insert(['email' => 'admin@mail.com', 'password' => Hash::make('password')]);
        Patient::factory(20)->create();
        Doctor::factory(15)->create();
        DB::table('questions')->insert([
            ['description' => 'Seberapa sering anda merasakan nyeri atau tekanan di dada?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Seberapa sering anda mengalami sesak napas atau kesulitan bernapas terutama setelah aktivitas fisik?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Seberapa sering anda  merasakan lelah yang berlebihan atau kelelahan yang tidak wajar, bahkan setelah istirahat?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Seberapa sering anda merasakan detak jantung yang tidak teratur atau berdebar-debar?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Seberapa sering anda mengalami keringat dingin atau pusing yang tidak dijelaskan?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Seberapa sering anda merasakan sakit atau ketidaknyamanan di lengan kiri, rahang, leher, atau punggung atas?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Apakah anda memiliki riwayat keluarga dengan penyakit jantung?', 'type' => 'boolean', 'admin_id' => null],
            ['description' => 'Apakah Anda mengalami pembengkakan di kaki, pergelangan kaki, atau daerah lainnya?', 'type' => 'boolean', 'admin_id' => null],
            ['description' => 'Apakah tekanan darah Anda cenderung tinggi?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Apakah sesak napas dan kesulitan bernapas tersebut terjadi hanya saat beraktivitas fisik atau bahkan saat istirahat?', 'type' => 'boolean', 'admin_id' => null],
            ['description' => 'Apakah lelah yang Anda rasakan terkait dengan aktivitas tertentu atau muncul tanpa sebab yang jelas?', 'type' => 'boolean', 'admin_id' => null],
            ['description' => 'Apakah Anda biasanya mengalami keringat dingin atau pusing bersamaan dengan gejala lainnya atau secara terpisah?', 'type' => 'boolean', 'admin_id' => null],
            ['description' => 'Jika Anda merasakan sakit atau ketidaknyamanan di lengan kiri, rahang, leher, atau punggung atas, seberapa intens gejala tersebut?', 'type' => 'scale', 'admin_id' => null],
            ['description' => 'Apakah Anda memantau tekanan darah Anda secara teratur? ', 'type' => 'boolean', 'admin_id' => null],
        ]);

        Assessment::factory(20)->create();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('patient_assessment')->insert(['patient_id' => mt_rand(1, 20), 'assessment_id' => $i]);
            DB::table('assessment_doctor')->insert(['assessment_id' => $i, 'doctor_id' => mt_rand(1, 15)]);
            $questions = Question::all();
            foreach ($questions as $question){
                $type = $question->type;
                DB::table('assessment_question')->insert([
                    'assessment_id' => $i, 
                    'question_id' => $question->id,
                    'answer' => ($type == "boolean") ? mt_rand(0, 1) : mt_rand(1, 5),
                ]);
            }
        }
    }
}
