<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('events')->truncate();
			$events = [
				[
					'title' => '第66回理工展',
					'content' => '早稲田大学の学園祭である早稲田祭・理工展で発表させていただきます。下記の日程で日頃の研究の展示や体験を行なっております。皆様のご来場を心より楽しみにしております。企画名: iGEM-Waseda(展示・講演) 時間: 11/2(Sat) 10:00 - 17:00, 11/13(Sun) 10:00 - 16:00 場所: 53号館-B01 理工展の詳細はこちら: https://www.rikoten.com/php/pages/events/event_list.php',
					'anchor' => 'event',
					'category' => ''
				],
				[
					'title' => '[学生向け] iGEM説明会',
					'content' => '2020年度のiGEM出場・上位進出を目指し活動しています。iGEMは生物の研究・理論的な計算機でのシミュレーション・社会とのコミュニケーションなどを総合して評価されます。そのため、文系・理系問わず、様々なメンバーに参加いただきたいと思っております。合成生物学などに興味がある方・EDGEなどのアントレプレナー教育に興味がある方は是非参加して欲しいです！この説明会にお気軽にご参加ください！皆様とお会いできるのを心よりお待ちしております！日時 : 11月5日(火)19時～ (1時間程度)場所 : 51号館3階第5会議室(51-3-09)',
					'anchor' => 'event',
					'category' => ''
				]
			];
			foreach($events as $event) {
				\App\Event::create($event);
			}
    }
}
