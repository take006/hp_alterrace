# 概要
人材派遣会社のコーポレートサイト。お問い合わせ機能、ニュース、求人掲載を目的としている。

## 目的
- 対企業向けに会社概要の紹介
- 求人サイト⇒ホームページ経由での採用を増やす

# 使用技術
- HTML
- CSS
- JavaScript
- PHP
- MySQL

## 開発環境
- XAMPP

## 選定理由
Vanilla PHPで一から作成してPHPの仕組みを理解する。コーポレートサイトのため、ニュース、求人情報をCMS管理する為に将来的にはwordpressを導入する。

# テーブル設計
## news
| id | 型 | null | 内容 |
| --- | --- | --- | --- |
| id | int | not | Unique id・Auto Increment |
| title | string | not | ニュースタイトル |
| content | text | not | ニュース内容 |
| created_at | timestamp | not | 作成日時 |
| updated_at | timestamp | not | 更新日時 |

# 工夫
Vanilla PHPで全て構築しているので、メール送信機能などもPHPMailerとVanilla PHPで実装。フレームワークではなくVanilla PHPを使用することで根本的なロジックを理解。

# 追加機能
## recruits
**将来的にテーブル化予定**
| id | 型 | null | 内容 |
| --- | --- | --- | --- |