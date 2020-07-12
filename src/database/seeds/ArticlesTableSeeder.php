<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        $articles = [
                     ['title' => '第1回活動報告',
                      'content' => '2019年4月よりWaseda iGEMのチームの活動が始まりました。現時点では週1回土曜に集まって活動しております。内容としてはチームの基盤づくり、各自が勉強した生物学の基本的な知識の共有、ホームページ作り、iGEMについての勉強(概要や過去の研究)等などを行ってきました。現時点のメンバーは学部1年~3年生が10人ほどいます。',
                      'anchor' => 'activity',
                      'category' => ''
										],
										[
											'title' => '第2回活動報告',
											'content' => '8月16日に東京工業大学において開催されたiGEM Japan Summer Meetupに参加しました。iGEM Japan Summer Meetupはその年のiGEMに参加するチームが現時点での研究テーマや計画について発表するイベントです。各チームは情報を共有したり,過去のiGEM経験者からアドバイスを受けたりすることができます。今年のiGEMにおける日本の参加チームは2019年のチームリストによれば東工大,理科大,京都大,岐阜大,群馬大,神奈川工科,京都産業大,ASIJ(高校)の8チームです。今回のMeetupには東工大,理科大,京都大,岐阜大,群馬大, ASIJの6チームが参加されておりました(各チームの研究についは2019年のチームリストとしたリンクから各チームのWikiにアクセスすることで確認することができます)。また発表はされておりませんでしたが我々と同じく来年からのiGEMへの参加を計画しているということで東大の方もMeetupには来られておりました。Meetupに参加してみたところの筆者の個人的な感想として応用を見据えた研究が多いなという印象を受けました。これはiGEMの評価基準にHuman Practicesという項目があることに由来すると考えられます。Human Practicesとは簡単に言えばiGEMのプロジェクトの社会との関り方や貢献です。我々も研究のテーマを考えるときには社会との関り方まで意識して考えることができるようにしたいと思いました。',
											'anchor' => 'activity',
											'category' => 'hogepiyo'
										]
                    ];
       foreach ($articles as $article) {
         \App\Article::create($article);
       }
    }
}
