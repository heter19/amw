'use strict';

const e = React.createElement;

class pileczka extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }

  render() {
    if (this.state.liked) {
      return 'Strzelił gola nr: ' + this.props.commentID;
    }

    return e(
      'button',
      { onClick: () => this.setState({ liked: true }) },
      'Strzel gola'
    );
  }
}

// Find all DOM containers, and render Like buttons into them.
document.querySelectorAll('.pileczka')
  .forEach(domContainer => {
    // Read the comment ID from a data-* attribute.
    const commentID = parseInt(domContainer.dataset.commentid, 10);
    ReactDOM.render(
      e(pileczka, { commentID: commentID }),
      domContainer
    );
  });
