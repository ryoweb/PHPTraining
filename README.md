使用ツール
GitHub(https://github.com)
Docker(https://www.docker.com)
VSCode(https://code.visualstudio.com)
DevContainer(https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)

DevContainerの拡張機能をインストールしてください
VSCodeのプラグインでコンテナ上での開発を可能にするものです。
これにより環境構築とVSCodeの設定を一括で行い、dockerと合わせて利用することで
環境差異によるトラブルを未然に防ぎます。
>概要: https://code.visualstudio.com/docs/devcontainers/containers

環境構築
```
1.docker compose up -d
2.拡張のDevContainerを利用しコンテナに接続
3.composer intsall
```