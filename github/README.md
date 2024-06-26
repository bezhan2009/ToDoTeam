
### Основные команды Git

#### 1. `git add .`
Эта команда добавляет все изменения в текущем рабочем каталоге (включая новые файлы и изменения в уже существующих файлах) в индекс для следующего коммита.

```sh
git add .
```

#### 2. `git commit -m "текст коммита"`
Команда фиксирует изменения, которые были добавлены в индекс, с сообщением, поясняющим, что было сделано.

```sh
git commit -m "текст коммита"
```

#### 3. `git push origin main`
Эта команда отправляет ваши коммиты из локального репозитория в удалённый репозиторий на ветку `main`.

```sh
git push origin main
```

### Проверка изменений других пользователей

#### Просмотр изменений в репозитории
Чтобы увидеть, какие изменения были сделаны другими пользователями в удалённом репозитории, вы можете просто зайти на страницу репозитория на GitHub, GitLab или другой платформе. Там вы увидите последние коммиты и изменения.

#### 4. `git pull`
Команда `git pull` объединяет изменения из удалённого репозитория с вашим локальным репозиторием. Она выполняет `git fetch`, а затем `git merge`.

```sh
git pull
```

Если вы работаете на определённой ветке, например `main`, и хотите получить последние изменения с этой ветки:

```sh
git pull origin main
```

#### 5. `git fetch`
Команда `git fetch` загружает все изменения из удалённого репозитория, но не объединяет их с вашим текущим рабочим деревом. Это полезно для просмотра изменений перед их интеграцией.

```sh
git fetch
```

После выполнения `git fetch` вы можете посмотреть список новых веток или изменений, которые были загружены:

```sh
git branch -r
```

### Примеры использования Git

#### Сценарий 1: Коммит и пуш изменений
1. Сделайте изменения в ваших файлах.
2. Добавьте изменения в индекс:

    ```sh
    git add .
    ```

3. Закоммитьте изменения с сообщением:

    ```sh
    git commit -m "Описание изменений"
    ```

4. Отправьте изменения в удалённый репозиторий:

    ```sh
    git push origin main
    ```

#### Сценарий 2: Получение изменений других пользователей
1. Получите последние изменения с удалённого репозитория:

    ```sh
    git pull origin main
    ```

2. Если другая ветка была создана и вы хотите её загрузить:

    ```sh
    git fetch
    ```

3. Просмотрите новые ветки:

    ```sh
    git branch -r
    ```

### Полезные советы

- **Просмотр логов коммитов**: `git log` позволяет вам увидеть историю коммитов.
  
  ```sh
  git log
  ```

- **Проверка статуса файлов**: `git status` показывает текущий статус рабочего каталога и индекса.

  ```sh
  git status
  ```

- **Создание и переключение на новую ветку**: `git checkout -b new-branch` создаёт новую ветку и переключается на неё.

  ```sh
  git checkout -b new-branch
  ```

Это базовые команды и примеры работы с Git, которые помогут вам начать работу и эффективно управлять своим кодом.
