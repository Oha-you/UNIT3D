@php
    $user = App\Models\User::query()
        ->with(['chatroom', 'group', 'settings'])
        ->find(auth()->id());
@endphp

<section
    id="chatbody"
    class="panelV2 chatbox"
    x-data="chatbox(@js($user))"
    :class="state.ui.fullscreen && 'chatbox--fullscreen'"
>
    <div class="loading__spinner" x-show="state.ui.loading">
        <div class="spinner__dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
        <div class="spinner__text">Chatbox loading</div>
    </div>

    <div x-show="!state.ui.loading">
        <header class="panel__header" id="chatbox_header">
            <h2 class="panel__heading">
                <i class="fas fa-comment-dots"></i>
                Chatbox
            </h2>
            <div class="panel__actions">
                <div class="panel__action">
                    <button class="form__button form__button--text" @click.prevent="startBot()">
                        <i class="fa fa-robot"></i>
                        <span x-text="state.message.helpName"></span>
                    </button>
                </div>
                <div class="panel__action" x-show="state.chat.target < 1 && state.chat.bot < 1">
                    <button class="form__button form__button--text" @click.prevent="toggleUserList">
                        <i class="fa fa-users"></i>
                        Users:
                        <span x-text="users.size"></span>
                    </button>
                </div>
                <div class="panel__action">
                    <template
                        x-if="state.chat.room && state.chat.room > 0 && state.chat.bot < 1 && state.chat.target < 1"
                    >
                        <button
                            class="form__button form__standard-icon-button form__standard-icon-button--skinny"
                            @click.prevent="changeAudible('room', state.chat.room, state.chat.listening ? 0 : 1)"
                                          changeAudible('room', state.chat.room, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          QCxDAqAM2Ar9hupUGHr61GQKRcUvbE5BOwqbWoEbfJOEY2TIoSB"
                                          ton form__standard-icon-button form__standard-icon-button--skinny"
                                          changeAudible('bot', state.chat.bot, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          IQX6snAw2UPE8wuxvVNx73FrYKaigFAjcixhHMZ9ItQqZrWZjysXVB"
                                          ton form__standard-icon-button form__standard-icon-button--skinny"
                                          changeAudible('target', state.chat.target, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          form__standard-icon-button form__standard-icon-button--skinny"
                                           notifications"
                                          geWhispers()"
                                          (state.chat.showWhispers ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          at.showWhispers ? 'fas fa-keyboard' : 'fa fa-keyboard'"
                                          >
                                          oom"
                                          ect"
                                          BeVsDduGkWa2c4qU8B"
                                          "chatroom in chatrooms" :key="chatroom.id">
                                          ue="chatroom.id" x-text="chatroom.name"></option>
                                          label form__label--floating" for="currentChatroom">
                                          >
                                          tatus"
                                          ect"
                                          Bf3kaxAL0EIdEKfSSXNXAB"
                                          "chatstatus in statuses" :key="chatstatus.id">
                                          chatstatus.id"
                                          d="chatstatus.id === auth.chat_status_id"
                                          B4qETsemn0v4IzszqB"
                                          label form__label--floating" for="currentChatstatus">
                                          "
                                          form__standard-icon-button"
                                          reen"
                                          geFullscreen()"
                                          fullscreen ? 'fas fa-compress' : 'fas fa-expand'"></i>
                                          __tabs" role="tablist">
                                          XIHwjEVMIxGAwelRB" :key="conversation.id">
                                          sFglQgzPOrKiU9RztXagMYviucdcMlvxwKqOmP8Vrya8cpY3SF9kelblmxK1niutzXB"
                                          x__tab"
                                          & conversation.room && state.chat.tab === conversation.room.name && 'panel__tab--active'"
                                          b('room', conversation.room.id)"
                                          "
                                          room', conversation.room && conversation.room.id ? conversation.room.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          EHdpfZzkvTkeFg37bcQJJZRl4RshEqwhdVHxhSbon4tw7IzbTyftvCuFxgo5qegB"
                                          6p2lxSw8aCwHy9R7Wpb8r151Gnlg3klZwkYqtfSVPIiR24DO3I2hu1jgOSL5fUqmALog7nB"
                                          delete-button"
                                          eRoom(state.chat.room)"
                                          s chatbox__tab-delete-icon"></i>
                                          ARPlr4hrTvqlp2n7B" :key="conversation.id">
                                          eXIWZzDsnqhvYOYAyNQXkbOXd0ykH3jT1BGp0t4xouws7z5MRLBwVs5QmQqgx2fFnJEB7305MrGR5Krop63wJhC7ZEMSZroQni1PGfm1l6cbYwlIGxVKCogYLoemsdSoXIIT4sfqVJS7BKozmLnAxZSehQT3eHPg4hlXjRPHLY0GPw0NTeF92YhRfTuymrbbMTRxUXEJ6C37i0Y5kvYccO4Oi8jLG4uQDoGAn4BN7BcTZwpPqB"
                                          x__tab"
                                          t >= 3 && conversation.target && state.chat.target === conversation.target.id && 'panel__tab--active'"
                                          b('target', conversation.target.id)"
                                          "
                                          target', conversation.target && conversation.target.id ? conversation.target.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          94gLdySqYnnoaTdLflMwMHVVXiidXrq6CT7ZCYVfRoVouIv0t3RJwGlLpaYGqOWOjkeC53aMFgw74B"
                                          6nnETDhgCrIEyOA5meV7g7x1IftaieAGMw8biLDpw4F2n45JxYhqWh6T0f7mSLA14GvV9CaiZb68VyJ7CUrB"
                                          delete-button"
                                          eTarget(state.chat.target)"
                                          s chatbox__tab-delete-icon"></i>
                                          qrZMRB6GGuItvvOwB" :key="conversation.id">
                                          6o2lfKSj7wJAqDKagpyxl0Vmid4nYL0lrCyAhpJOQkq4DUfQ7PNX8ZnW70AROtLJbZ59R3IAYbQNgAA7Z3DRkuaIUrh45Q8WhYX344KijW8bEpiNVQjp7nPCQWc4sjscLjKSKaeiIHf7WtsWYSqzQOYxzQbT0fHjN7yiNHbaPk8KPzFbKHifwLK7tYvLpsrLVY7ueKFdtJITAdHXoVVvXLicMkpSwB"
                                          x__tab"
                                           0 && conversation.bot && state.chat.bot === conversation.bot.id && 'panel__tab--active'"
                                          b('bot', conversation.bot.id)"
                                          "
                                          bot', conversation.bot && conversation.bot.id ? conversation.bot.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          HDlJXi1zgCtkWPDizu3WFAEOJz3k9TkJZATTdhiVE9mmwkkBdTs5YcFuQ982B"
                                          tvpEnNZDqZlUUzJegTB7hWq6tKL4U1klN9bIqRhiJVdPkctiZG3qXRXTegm9teL4CYlYHHB"
                                          delete-button"
                                          eBot(state.chat.bot)"
                                          s chatbox__tab-delete-icon"></i>
                                          y3iBvttB">
                                          es--wrapper" x-ref="messagesWrapper">
                                          sages">
                                          oYUVhkXBsRsqfnfpP1MPsR4XhOLa6w89B" :key="message.id">
                                          ss="chatbox-message">
                                          class="chatbox-message__header">
                                          ress
                                          class="chatbox-message__address user-tag"
                                          :style="(message.user?.is_donor ? 'background-image: url(/img/sparkels.gif);' : (message.user?.group?.effect ? 'background-image:' + message.user.group.effect + ';' : ''))"
                                          <a
                                              class="user-tag__link"
                                              :class="message.user?.group?.icon"
                                              :href="message.user?.username ? '/users/' + message.user.username : ''"
                                              :style="message.user?.group?.color ? 'color:' + message.user.group.color : ''"
                                              :title="message.user?.group?.name"
                                          >
                                              <span
                                                  x-show="message.user && message.user.id > 1"
                                                  style="padding-right: 5px"
                                                  x-text="message.user?.username || 'Unknown'"
                                              ></span>
                                              <span
                                                  x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                                  x-text="message.bot?.name || 'Unknown'"
                                              ></span>
                                              <template x-if="message.user?.icon">
                                                  <i>
                                                      <img
                                                          :style="'max-height: 16px; vertical-align: text-bottom;'"
                                                          title="Custom user icon"
                                                          :src="'/authenticated-images/user-icons/' + message.user.username"
                                                          loading="lazy"
                                                      />
                                                  </i>
                                              </template>
                                              <i
                                                  x-show="message.user?.is_lifetime == 1"
                                                  class="fal fa-star"
                                                  id="lifeline"
                                                  title="Lifetime donor"
                                              ></i>
                                              <i
                                                  x-show="message.user?.is_donor == 1 && message.user?.is_lifetime == 0"
                                                  class="fal fa-star text-gold"
                                                  title="Donor"
                                              ></i>
                                          </a>
                                          dress>
                                          x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          class="bbcode-rendered bot-message"
                                          style="
                                              font-style: italic;
                                              white-space: nowrap;
                                              display: inline;
                                          "
                                          changeAudible('room', state.chat.room, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          QCxDAqAM2Ar9hupUGHr61GQKRcUvbE5BOwqbWoEbfJOEY2TIoSB"
                                          ton form__standard-icon-button form__standard-icon-button--skinny"
                                          changeAudible('bot', state.chat.bot, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          IQX6snAw2UPE8wuxvVNx73FrYKaigFAjcixhHMZ9ItQqZrWZjysXVB"
                                          ton form__standard-icon-button form__standard-icon-button--skinny"
                                          changeAudible('target', state.chat.target, state.chat.listening ? 0 : 1)"
                                          ' + (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          e.chat.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          form__standard-icon-button form__standard-icon-button--skinny"
                                           notifications"
                                          geWhispers()"
                                          (state.chat.showWhispers ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          at.showWhispers ? 'fas fa-keyboard' : 'fa fa-keyboard'"
                                          >
                                          oom"
                                          ect"
                                          BeVsDduGkWa2c4qU8B"
                                          "chatroom in chatrooms" :key="chatroom.id">
                                          ue="chatroom.id" x-text="chatroom.name"></option>
                                          label form__label--floating" for="currentChatroom">
                                          >
                                          tatus"
                                          ect"
                                          Bf3kaxAL0EIdEKfSSXNXAB"
                                          "chatstatus in statuses" :key="chatstatus.id">
                                          chatstatus.id"
                                          d="chatstatus.id === auth.chat_status_id"
                                          B4qETsemn0v4IzszqB"
                                          label form__label--floating" for="currentChatstatus">
                                          "
                                          form__standard-icon-button"
                                          reen"
                                          geFullscreen()"
                                          fullscreen ? 'fas fa-compress' : 'fas fa-expand'"></i>
                                          __tabs" role="tablist">
                                          XIHwjEVMIxGAwelRB" :key="conversation.id">
                                          sFglQgzPOrKiU9RztXagMYviucdcMlvxwKqOmP8Vrya8cpY3SF9kelblmxK1niutzXB"
                                          x__tab"
                                          & conversation.room && state.chat.tab === conversation.room.name && 'panel__tab--active'"
                                          b('room', conversation.room.id)"
                                          "
                                          room', conversation.room && conversation.room.id ? conversation.room.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          EHdpfZzkvTkeFg37bcQJJZRl4RshEqwhdVHxhSbon4tw7IzbTyftvCuFxgo5qegB"
                                          6p2lxSw8aCwHy9R7Wpb8r151Gnlg3klZwkYqtfSVPIiR24DO3I2hu1jgOSL5fUqmALog7nB"
                                          delete-button"
                                          eRoom(state.chat.room)"
                                          s chatbox__tab-delete-icon"></i>
                                          ARPlr4hrTvqlp2n7B" :key="conversation.id">
                                          eXIWZzDsnqhvYOYAyNQXkbOXd0ykH3jT1BGp0t4xouws7z5MRLBwVs5QmQqgx2fFnJEB7305MrGR5Krop63wJhC7ZEMSZroQni1PGfm1l6cbYwlIGxVKCogYLoemsdSoXIIT4sfqVJS7BKozmLnAxZSehQT3eHPg4hlXjRPHLY0GPw0NTeF92YhRfTuymrbbMTRxUXEJ6C37i0Y5kvYccO4Oi8jLG4uQDoGAn4BN7BcTZwpPqB"
                                          x__tab"
                                          t >= 3 && conversation.target && state.chat.target === conversation.target.id && 'panel__tab--active'"
                                          b('target', conversation.target.id)"
                                          "
                                          target', conversation.target && conversation.target.id ? conversation.target.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          94gLdySqYnnoaTdLflMwMHVVXiidXrq6CT7ZCYVfRoVouIv0t3RJwGlLpaYGqOWOjkeC53aMFgw74B"
                                          6nnETDhgCrIEyOA5meV7g7x1IftaieAGMw8biLDpw4F2n45JxYhqWh6T0f7mSLA14GvV9CaiZb68VyJ7CUrB"
                                          delete-button"
                                          eTarget(state.chat.target)"
                                          s chatbox__tab-delete-icon"></i>
                                          qrZMRB6GGuItvvOwB" :key="conversation.id">
                                          6o2lfKSj7wJAqDKagpyxl0Vmid4nYL0lrCyAhpJOQkq4DUfQ7PNX8ZnW70AROtLJbZ59R3IAYbQNgAA7Z3DRkuaIUrh45Q8WhYX344KijW8bEpiNVQjp7nPCQWc4sjscLjKSKaeiIHf7WtsWYSqzQOYxzQbT0fHjN7yiNHbaPk8KPzFbKHifwLK7tYvLpsrLVY7ueKFdtJITAdHXoVVvXLicMkpSwB"
                                          x__tab"
                                           0 && conversation.bot && state.chat.bot === conversation.bot.id && 'panel__tab--active'"
                                          b('bot', conversation.bot.id)"
                                          "
                                          bot', conversation.bot && conversation.bot.id ? conversation.bot.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          HDlJXi1zgCtkWPDizu3WFAEOJz3k9TkJZATTdhiVE9mmwkkBdTs5YcFuQ982B"
                                          tvpEnNZDqZlUUzJegTB7hWq6tKL4U1klN9bIqRhiJVdPkctiZG3qXRXTegm9teL4CYlYHHB"
                                          delete-button"
                                          eBot(state.chat.bot)"
                                          s chatbox__tab-delete-icon"></i>
                                          y3iBvttB">
                                          es--wrapper" x-ref="messagesWrapper">
                                          sages">
                                          oYUVhkXBsRsqfnfpP1MPsR4XhOLa6w89B" :key="message.id">
                                          ss="chatbox-message">
                                          class="chatbox-message__header">
                                          ress
                                          class="chatbox-message__address user-tag"
                                          :style="(message.user?.is_donor ? 'background-image: url(/img/sparkels.gif);' : (message.user?.group?.effect ? 'background-image:' + message.user.group.effect + ';' : ''))"
                                          <a
                                              class="user-tag__link"
                                              :class="message.user?.group?.icon"
                                              :href="message.user?.username ? '/users/' + message.user.username : ''"
                                              :style="message.user?.group?.color ? 'color:' + message.user.group.color : ''"
                                              :title="message.user?.group?.name"
                                          >
                                              <span
                                                  x-show="message.user && message.user.id > 1"
                                                  style="padding-right: 5px"
                                                  x-text="message.user?.username || 'Unknown'"
                                              ></span>
                                              <span
                                                  x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                                  x-text="message.bot?.name || 'Unknown'"
                                              ></span>
                                              <template x-if="message.user?.icon">
                                                  <i>
                                                      <img
                                                          :style="'max-height: 16px; vertical-align: text-bottom;'"
                                                          title="Custom user icon"
                                                          :src="'/authenticated-images/user-icons/' + message.user.username"
                                                          loading="lazy"
                                                      />
                                                  </i>
                                              </template>
                                              <i
                                                  x-show="message.user?.is_lifetime == 1"
                                                  class="fal fa-star"
                                                  id="lifeline"
                                                  title="Lifetime donor"
                                              ></i>
                                              <i
                                                  x-show="message.user?.is_donor == 1 && message.user?.is_lifetime == 0"
                                                  class="fal fa-star text-gold"
                                                  title="Donor"
                                              ></i>
                                          </a>
                                          dress>
                                          x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          class="bbcode-rendered bot-message"
                                          style="
                                              font-style: italic;
                                              white-space: nowrap;
                                              display: inline;
                                          "
                                          x-html="message.message"
                                          iv>
                                          e
                                          x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          style="
                                              margin-left: 10px;
                                              white-space: nowrap;
                                              display: inline;
                                          "
                                          geAudible('room', state.chat.room, state.chat.listening ? 0 : 1)"
                                          (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          at.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          AqAM2Ar9hupUGHr61GQKRcUvbE5BOwqbWoEbfJOEY2TIoSB"
                                          form__standard-icon-button form__standard-icon-button--skinny"
                                          geAudible('bot', state.chat.bot, state.chat.listening ? 0 : 1)"
                                          (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          at.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          snAw2UPE8wuxvVNx73FrYKaigFAjcixhHMZ9ItQqZrWZjysXVB"
                                          form__standard-icon-button form__standard-icon-button--skinny"
                                          geAudible('target', state.chat.target, state.chat.listening ? 0 : 1)"
                                          (state.chat.listening ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          at.listening ? 'fa fa-bell' : 'fa fa-bell-slash'"
                                          __standard-icon-button form__standard-icon-button--skinny"
                                          ifications"
                                          ispers()"
                                          te.chat.showWhispers ? 'rgb(0,102,0)' : 'rgb(204,0,0)')"
                                          howWhispers ? 'fas fa-keyboard' : 'fa fa-keyboard'"
                                          DduGkWa2c4qU8B"
                                          CBjlFWTfjEje3xo2Jkb7B" :key="chatroom.id">
                                          chatroom.id" x-text="chatroom.name"></option>
                                          l form__label--floating" for="currentChatroom">
                                          s"
                                          axAL0EIdEKfSSXNXAB"
                                          GZKiFU1Vl8xFxN6hW82RiB" :key="chatstatus.id">
                                          status.id"
                                          hatstatus.id === auth.chat_status_id"
                                          Tsemn0v4IzszqB"
                                          l form__label--floating" for="currentChatstatus">
                                          __standard-icon-button"
                                          "
                                          llscreen()"
                                          screen ? 'fas fa-compress' : 'fas fa-expand'"></i>
                                          bs" role="tablist">
                                          jEVMIxGAwelRB" :key="conversation.id">
                                          QgzPOrKiU9RztXagMYviucdcMlvxwKqOmP8Vrya8cpY3SF9kelblmxK1niutzXB"
                                          ab"
                                          nversation.room && state.chat.tab === conversation.room.name && 'panel__tab--active'"
                                          oom', conversation.room.id)"
                                          ', conversation.room && conversation.room.id ? conversation.room.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          fZzkvTkeFg37bcQJJZRl4RshEqwhdVHxhSbon4tw7IzbTyftvCuFxgo5qegB"
                                          xSw8aCwHy9R7Wpb8r151Gnlg3klZwkYqtfSVPIiR24DO3I2hu1jgOSL5fUqmALog7nB"
                                          te-button"
                                          m(state.chat.room)"
                                          atbox__tab-delete-icon"></i>
                                          r4hrTvqlp2n7B" :key="conversation.id">
                                          ZzDsnqhvYOYAyNQXkbOXd0ykH3jT1BGp0t4xouws7z5MRLBwVs5QmQqgx2fFnJEB7305MrGR5Krop63wJhC7ZEMSZroQni1PGfm1l6cbYwlIGxVKCogYLoemsdSoXIIT4sfqVJS7BKozmLnAxZSehQT3eHPg4hlXjRPHLY0GPw0NTeF92YhRfTuymrbbMTRxUXEJ6C37i0Y5kvYccO4Oi8jLG4uQDoGAn4BN7BcTZwpPqB"
                                          ab"
                                           3 && conversation.target && state.chat.target === conversation.target.id && 'panel__tab--active'"
                                          arget', conversation.target.id)"
                                          et', conversation.target && conversation.target.id ? conversation.target.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          dySqYnnoaTdLflMwMHVVXiidXrq6CT7ZCYVfRoVouIv0t3RJwGlLpaYGqOWOjkeC53aMFgw74B"
                                          TDhgCrIEyOA5meV7g7x1IftaieAGMw8biLDpw4F2n45JxYhqWh6T0f7mSLA14GvV9CaiZb68VyJ7CUrB"
                                          te-button"
                                          get(state.chat.target)"
                                          atbox__tab-delete-icon"></i>
                                          RB6GGuItvvOwB" :key="conversation.id">
                                          fKSj7wJAqDKagpyxl0Vmid4nYL0lrCyAhpJOQkq4DUfQ7PNX8ZnW70AROtLJbZ59R3IAYbQNgAA7Z3DRkuaIUrh45Q8WhYX344KijW8bEpiNVQjp7nPCQWc4sjscLjKSKaeiIHf7WtsWYSqzQOYxzQbT0fHjN7yiNHbaPk8KPzFbKHifwLK7tYvLpsrLVY7ueKFdtJITAdHXoVVvXLicMkpSwB"
                                          ab"
                                          & conversation.bot && state.chat.bot === conversation.bot.id && 'panel__tab--active'"
                                          ot', conversation.bot.id)"
                                          , conversation.bot && conversation.bot.id ? conversation.bot.id : 0) ? 'fa-beat text-success' : 'text-danger'"
                                          Xi1zgCtkWPDizu3WFAEOJz3k9TkJZATTdhiVE9mmwkkBdTs5YcFuQ982B"
                                          nNZDqZlUUzJegTB7hWq6tKL4U1klN9bIqRhiJVdPkctiZG3qXRXTegm9teL4CYlYHHB"
                                          te-button"
                                          (state.chat.bot)"
                                          atbox__tab-delete-icon"></i>
                                          vttB">
                                          wrapper" x-ref="messagesWrapper">
                                          s">
                                          hkXBsRsqfnfpP1MPsR4XhOLa6w89B" :key="message.id">
                                          chatbox-message">
                                          s="chatbox-message__header">
                                          s="chatbox-message__address user-tag"
                                          le="(message.user?.is_donor ? 'background-image: url(/img/sparkels.gif);' : (message.user?.group?.effect ? 'background-image:' + message.user.group.effect + ';' : ''))"
                                          class="user-tag__link"
                                          :class="message.user?.group?.icon"
                                          :href="message.user?.username ? '/users/' + message.user.username : ''"
                                          :style="message.user?.group?.color ? 'color:' + message.user.group.color : ''"
                                          :title="message.user?.group?.name"
                                          <span
                                              x-show="message.user && message.user.id > 1"
                                              style="padding-right: 5px"
                                              x-text="message.user?.username || 'Unknown'"
                                          ></span>
                                          <span
                                              x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                              x-text="message.bot?.name || 'Unknown'"
                                          ></span>
                                          <template x-if="message.user?.icon">
                                              <i>
                                                  <img
                                                      :style="'max-height: 16px; vertical-align: text-bottom;'"
                                                      title="Custom user icon"
                                                      :src="'/authenticated-images/user-icons/' + message.user.username"
                                                      loading="lazy"
                                                  />
                                              </i>
                                          </template>
                                          <i
                                              x-show="message.user?.is_lifetime == 1"
                                              class="fal fa-star"
                                              id="lifeline"
                                              title="Lifetime donor"
                                          ></i>
                                          <i
                                              x-show="message.user?.is_donor == 1 && message.user?.is_lifetime == 0"
                                              class="fal fa-star text-gold"
                                              title="Donor"
                                          ></i>
                                          s>
                                          ow="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          s="bbcode-rendered bot-message"
                                          e="
                                          font-style: italic;
                                          white-space: nowrap;
                                          display: inline;
                                          ml="message.message"
                                          ow="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          e="
                                          margin-left: 10px;
                                          white-space: nowrap;
                                          display: inline;
                                          s="chatbox-message__time"
                                          etime="message.created_at"
                                          le="message.created_at"
                                          xt="formatTime(message.created_at)"
                                          ow="! (message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2))"
                                          s="chatbox-message__time"
                                          etime="message.created_at"
                                          le="message.created_at"
                                          xt="formatTime(message.created_at)"
                                          ="chatbox-message__aside">
                                          class="chatbox-message__figure">
                                          class="fa fa-bell"
                                          title="System notification"
                                          x-show="message.bot && message.bot.id >= 1 && (! message.user || message.user.id < 2)"
                                          >
                                          x-show="message.user && message.user.id != 1"
                                          :href="'/users/' + message.user.username"
                                          class="chatbox-message__avatar-link"
                                          <img
                                              x-show="message.user && message.user.id != 1"
                                              class="chatbox-message__avatar"
                                              :src="message.user?.image ? '/authenticated-images/user-avatars/' + message.user.username : '/img/profile.png'"
                                              :style="'border: 2px solid ' + (message.user?.chat_status?.color || '#ccc')"
                                              :title="message.user?.chat_status?.name"
                                              loading="lazy"
                                          />
                                          >
                                          uYf0QSXo0YaV5dIX7q3jeWI74FAXyzmWXU31TD6Z24L2IqysT9rUUYToIuINA2S3K3BZ6jeUZzvhyZkbP7O68ESueKGmmD1wIxaPHEeOhj8WnEJ5ZGhuF0PA5FA8gXLcdARCbKoMwgfzVQRlLB0lH3lGTxgSxOlRgJ0szgXejGQmyAZkdWPdjOYbqHThWvQOhzOAALDHHReDMSGp1jTDaip76rJ0ZGD2KKz3knsQ3gxYc9McNb53wnPZJTT5EjSkDkOleadSp1jDAN4XvSpcB
                                          B59KXnEPJN78tDLfT99zQ8nSS2oBBAGkvOGJWoYhogXZo5FhBTpeBQOcpxlyoUQTdvxmZvpNDqjEotTu0qJB"
                                          B4bdKel4BNpOe1KIjB"
                                          nu back to original position after timestamp -->
                                          hatbox-message__menu"
                                          BFoIkT6xDBXyfh5Ub3y6MGD2ZsDM5U5vdB1m7NpGnl8mF30w9B"
                                          s="chatbox-message__menu-item">
                                          ton
                                          class="chatbox-message__delete-button"
                                          title="Delete message"
                                          @click.prevent="deleteMessage(message.id)"
                                          style="
                                              cursor: pointer;
                                              padding: 0;
                                              margin-left: 8px;
                                          "