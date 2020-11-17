import { html, define } from 'hybrids';
import './modules/pages/about';

export function increaseCount(host) {
  // eslint-disable-next-line no-param-reassign
  host.count += 1;
}

export const SimpleCounter = {
  count: 0,
  render: ({ count }) => html`
    <style>
      button {
        background: white;
        color: green;
      }
    </style>
    <button onclick="${increaseCount}">Count: ${count}</button>
  `,
};

define('simple-counter', SimpleCounter);
