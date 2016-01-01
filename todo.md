Fine Worker
===========

Obsluga czasochlonych zadan w tle.

Cechy:
- wiele kolejek
- wiele watkow per kolejke
- zadania cykliczne
- zadania opoznione
- crony


Cele
----

- do aplikacji podpinany jest jeden cron `* * * * * php /var/www/project1/app/fine worker:work`
- obsluga cronow
```
    app()->mod->cdn->mod->worker->job = function ($container) {
        $container['cdn:clean_tmp_dir'] = '\Fine\Cdn\Mod\Worker\CleanTmpDir';
    }
    $ php fine worker:configure
```

- wysylka maila
```
    app()->mod->app->mod->worker->job = function ($job) {
        $job['app:mail_register'] = '\Fine\App\Blog\Job\MailRegister';
    }

    app()->mod->worker->job->{'app:mail_register'}->setUserId(1234)->async();
```
- wysylka cloudMsgy
- import liveticker


// plusy trzymania w contenerze:
// - auto configuracja cycle jobow
// - autoprzypisanie do workera



\Fine\Worker\Job\JobInterface
    - type: cycle | disposable
    - name
    - ukey
    - tries
    - update
    - param
    - remove()
    - sync()
    - async()
    - pool
    - queue
    - atHour(18)
    - everyHour(1)
    - atMinute(15)

    `15 *`


queue i watki


$ php fine worker:start
$ php fine worker:stop
$ php fine worker:status
$ php fine worker:configure

$ php fine worker:dispatch --queue= --threadno=0
________________________________________________________________________________________________________________________

pool

  - setQueueThreads('import', 3);
  - setTask();
  - php fine worker:dispatch --queue= --threadno=0

  - start () {

  }
  - stop
  - status

  - addJob()
  - removeJob()

  - job - container

dispatcher

job

? log
? status


job: cycle progress status(todo, work, done?, error) delay, startAt, attempt, class, params attempts

- gdzie konfiguracja kolejek i liczby watkow per kolejke?
