<?php
use PHPUnit\Framework\TestCase;
class step2Test extends TestCase
{
    public function testContactForm()
    {
        $port = getenv('PORT') ?: '80';
        $url = "http://localhost:{$port}/step2";
        
        $postData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'This is a test message.',
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($postData),
            ],
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        // フォームが正しく処理され、リダイレクトがされた場合を確認
        $this->assertStringContainsString('Location: thank-you.php', implode($http_response_header));
    }
}
