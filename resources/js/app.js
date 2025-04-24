import './bootstrap';

const args = {
  addChoices: true,
  addItemFilter: (value) => !!value && value !== '',
  removeItems: false,
  removeItemButton: false,
  editItems: false,
  duplicateItemsAllowed: false,
  searchEnabled: true,
  searchChoices: true,
  allowHTML: true,
  shouldSort: true,
  itemSelectText: '',
  classNames: {
    containerOuter: ['choices'],
    containerInner: ['choices__inner', 'bg-slate-900', 'text-gray-400', 'border-none', 'outline-none', 'text-sm', 'rounded'],
    input: ['choices__input'],
    inputCloned: ['choices__input--cloned'],
    list: ['choices__list'],
    listItems: ['choices__list--multiple'],
    listSingle: ['choices__list--single'],
    listDropdown: ['choices__list--dropdown'],
    item: ['choices__item'],
    itemSelectable: ['choices__item--selectable'],
    itemDisabled: ['choices__item--disabled'],
    itemChoice: ['choices__item--choice'],
    description: ['choices__description'],
    placeholder: ['choices__placeholder'],
    group: ['choices__group'],
    groupHeading: ['choices__heading'],
    button: ['choices__button'],
    activeState: ['is-active'],
    focusState: ['is-focused'],
    openState: ['is-open'],
    disabledState: ['is-disabled'],
    highlightedState: ['is-highlighted'],
    selectedState: ['is-selected'],
    flippedState: ['is-flipped'],
    loadingState: ['is-loading'],
    notice: ['choices__notice'],
    addChoice: ['choices__item--selectable', 'add-choice'],
    noResults: ['has-no-results'],
    noChoices: ['has-no-choices'],
  },
};


document.querySelectorAll('.js-choice').forEach((element, index) => {
  new Choices(element, args);
});

document.getElementById('product-create').addEventListener('click', (e) => {

  fetch('/api/products', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'X-Requested-With': 'XMLHttpRequest',
    },
    body: JSON.stringify({
      'status': 0,
      'title': document.getElementById('title-create').value,
      'due': document.getElementById('due-create').value,
      'price': document.getElementById('price-create').value,
      'shop': document.getElementById('shop-create').value,
      'category': document.getElementById('category-create').value,
    })
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        console.log(response);
        throw new Error('Product create: Failed');
      }
    })
    .then(data => {
      console.log('Product create Success:', data);
      window.location.reload();
    })
    .catch((error) => {
      console.error('Product create Error:', error);
      console.error(error.response);
      // handle error
    });
}
);

function productDelete(id) {
  const idArray = id.split('-');

  fetch('/api/products/' + idArray[1], {
    method: 'POST',
    headers: {
      'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'X-HTTP-Method-Override': 'DELETE',
    },
  })
    .then(response => {
      if (response.ok) {
        return response;
      } else {
        console.log(response);
        throw new Error('Product delete: Failed');
      }
    })
    .then(data => {
      console.log('Product delete Success:', data);
      window.location.reload();
    })
    .catch((error) => {
      console.error('Product delete Error:', error);
    });
}

var elements = document.getElementsByClassName("product-delete");

for (var i = 0; i < elements.length; i++) {
  elements[i].addEventListener('click', function () {
    productDelete(this.id);
  });
}

var elements = document.getElementsByClassName("product-field");

for (var i = 0; i < elements.length; i++) {

  var action = 'change';

  if (elements[i].tagName.toLowerCase() == 'input') {
    if (elements[i].type == 'text') {
      action = 'blur';
    }
  }

  elements[i].addEventListener(action, function () {
    var value = this.value;
    if (this.tagName.toLowerCase() == 'input') {
      if (this.type == 'checkbox') {
        value = this.checked ? 1 : 0;
      }
    }
    productUpdate(this.id, value);
  });
}

document.getElementById('user-income').addEventListener('blur', function () {
  userUpdate(this.value);
});


var urlParams = new URLSearchParams(window.location.pathname.replace(/^\//, ''));
var elements = document.getElementsByClassName("table-filter");

var filters = {
  'status': urlParams.has('status') ? urlParams.get('status') : 'all',
  'due': urlParams.has('due') ? urlParams.get('due') : 'all',
  'shop': urlParams.has('shop') ? urlParams.get('shop') : 'all',
};

window.onload = function () {
  for (const [field, value] of Object.entries(filters)) {
    if (value != 'all') {
      var element = document.getElementById('filter-' + field);
      if (element) {
        element.classList.add('text-green-400');
        element.classList.remove("text-white");
      }
    }
  }
};



var shopFilter = Array.from(document.querySelectorAll("#shop-create option")).map(el => el.value);
var shopCurrent = shopFilter[0];

for (var i = 0; i < elements.length; i++) {
  elements[i].addEventListener('click', function () {

    var idArray = this.id.split('-');
    var field = idArray[1];

    if (field == 'status') {
      if (filters[field] == 'all') {
        filters[field] = 1;
      } else if (filters[field] == '1') {
        filters[field] = 0;
      } else {
        filters[field] = 'all';
      }
    }

    if (field == 'due') {
      if (filters[field] == 'all') {
        filters[field] = 'Now';
      } else if (filters[field] == 'Now') {
        filters[field] = 'Later';
      } else if (filters[field] == 'Later') {
        filters[field] = 'Auto';
      } else {
        filters[field] = 'all';
      }
    }

    if (field == 'shop') {
      if (filters[field] == 'all') {
        filters[field] = shopFilter[0];
        shopCurrent = shopFilter[0];
      } else {
        try {
          shopFilter.forEach((shop, index) => {
            if (filters[field] == shop) {
              filters[field] = shopFilter[index + 1] ? shopFilter[index + 1] : 'all';
              shopCurrent = shopFilter[index + 1] ? shopFilter[index + 1] : null;
              throw new Error("Found new shop");
            }
          });
        } catch (error) {
          // Do nothing here
        }
      }
    }


    window.location = '/' + 'status=' + filters['status'] + '&due=' + filters['due'] + '&shop=' + filters['shop'];
  });
}




function productUpdate(id, value) {
  var idArray = id.split('-');
  var field = idArray[0];
  var productId = idArray[1];

  if (field == 'status') {
    console.log(value);
  }

  fetch('/api/products/' + productId, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'X-HTTP-Method-Override': 'PUT',
    },
    body: JSON.stringify({
      [field]: value,
    })
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        console.log(response);
        throw new Error('Product update: Failed');
      }
    })
    .then(data => {
      console.log('Product update Success:', data);
    })
    .catch((error) => {
      console.error('Product update Error:', error);
    });
}

function userUpdate(value) {

  fetch('/api/users', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'X-HTTP-Method-Override': 'PUT',
    },
    body: JSON.stringify({
      'income': value,
    })
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        console.log(response);
        throw new Error('User update: Failed');
      }
    })
    .then(data => {
      console.log('User update Success:', data);
      window.location.reload();
    })
    .catch((error) => {
      console.error('User update Error:', error);
    });
} 